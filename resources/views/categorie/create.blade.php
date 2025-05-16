
{{-- @extends('layouts.app') --}}

{{-- @section('title', 'Formulaire') --}}



@section('content')
    <!-- Ton formulaire ici -->

    <body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

               <!-- Form wizard with icon tabs section start -->

               <section id="icon-tabs">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajout de la description</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">

                                        <form action="{{ route('categorie.store') }}" method="POST" >
                                            @csrf
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nom</label>
                                                        <input type="text" name="nom" class="form-control" required id="nom">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input type="text" name="description" class="form-control" required id="description">
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary" >Ajouter</button>
                                        </fieldset>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Form wizard with icon tabs section end -->


            @section('page-js')

    </body>



@endsection
