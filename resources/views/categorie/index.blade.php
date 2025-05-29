{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Liste des catégories</h4>

                        <a href="{{ route('categorie.create') }}" class="btn btn-success mb-3">Ajouter une catégorie</a>
                            @csrf
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $cat)
                                    <tr>
                                        <td>{{ $cat->nom }}</td>
                                        <td>{{ $cat->description }}</td>
                                        <td>
                                            <a href="{{ route('categorie.show', $cat->id) }}" class="btn btn-info btn-sm">Afficher</a>
                                            <a href="{{ route('categorie.edit', $cat->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                            <form action="{{ route('categorie.destroy', $cat->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Supprimer cette catégorie ?')">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
