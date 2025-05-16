
  @extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{ isset($categorie) ? 'Modifier' : 'Ajouter une nouvelle' }} categorie
                                
                            </h4>

                            <form class="forms-sample"
                                  action="{{ isset($categorie) ? route('categorie.update', $categorie->id) : route('categorie.create') }}"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @if(isset($categorie))
                                    @method('PUT')
                                @endif

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="nom" class="col-sm-3 col-form-label">Marque</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nom" id="nom"
                                                       value="{{ old('nom', $categorie->nom ?? '') }}" placeholder="Ex: Toyota">
                                                @error('nom')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="description" id="description"
                                                       value="{{ old('description', $categorie->description ?? '') }}" placeholder="Ex: Corolla">
                                                @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                                              
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                                <a href="{{ route('categorie.index') }}" class="btn btn-light">Annuler</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection