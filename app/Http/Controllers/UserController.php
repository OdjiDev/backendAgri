<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
           
        $users = User::all(); // récupère tous les utilisateurs
        // $user = User::latest()->paginate(10);
        return view('user.index', compact('users'));
      

    }
      public function create()
    {
        return view('users.create');
        
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:users',
            'telephone' => 'required|string',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
            'date_inscription' => 'required|date',
            'statut' => 'required|string',
            'email_verified_at'=> 'timestamp|date',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['date_inscription'] = now();

        // return User::create($validated);

         User::create($validated);
        return redirect()->route('user.index')->with('success', 'user ajoutée!');
    }
    

  

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);
        return $user;
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Utilisateur supprimé']);
    }
}
