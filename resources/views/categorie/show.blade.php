


@extends('layouts.app')

@section('title', 'Liste des véhicules')

@section('content')
    <section class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Liste des véhicules</h4>
                <a href="{{ route('categories.create') }}" class="btn btn-primary float-right">Ajouter un véhicule</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>


                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie)
                            <tr>
                                <td>{{ $categorie->nom }}</td>
                                <td>{{ $categorie->description }}</td>
                              
                                <td>
                                    <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-sm btn-warning">Modifier</a>

                                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce véhicule ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Pagination --}}
                {{ $categories->links() }}
            </div>
        </div>
    </section>
@endsection
