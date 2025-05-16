<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Use App\Models\Categorie;
class CategorieController extends Controller
{


    public function index()
    {
        $categorie = Categorie::latest()->paginate(10);
        return view('categorie.index', compact('categorie'));
    }

    public function create()
    {
        return view('categorie.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:50',
            'description' => 'required|string|max:50'
      
        ]);

        Categorie::create($validated);
        return redirect()->route('categorie.index')->with('success', 'Categorie ajoutée!');
    }

    public function show(Categorie $categorie)
    {
        return view('categorie.show', compact('categorie'));
    }

    public function edit(Categorie $categorie)
    {
        return view('categorie.edit', compact('categorie'));
    }


      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */

    public function update(Request $request, int $id)
    {
         $categorie= Categorie::findOrFail($id);
       
        $validated = $request->validate([
            'nom' => 'required|string|max:50',
            'description' => 'required|string|max:50'
            
        ]);
        try {
            DB::transaction(function () use ($request, $categorie){
               
                               
                $categorie->nom = $request->nom;
                $categorie->description = $request->description;
               
                $categorie->save();
            });
        }catch (\Exception $exception){
            // Back to form with errors
            return redirect('/categorie/edit/'.$id)
                ->withErrors($exception->getMessage())->withInput();
        }
        return redirect('/categorie')->with('success', 'A categorie Updated Successfully.');

    }

   
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categorie.index')->with('success', 'Categorie supprimée!');
    }
}
