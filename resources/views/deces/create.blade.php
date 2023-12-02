@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">Ajouter une nouvelle commune</h1>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="card mb-5">
                    <div class="card-body">
                        <center>
                            <img src="{{ asset('assets/img/camer.png') }}" class="imm" alt="card image"
                                style="width: 4%">
                        </center>
                        <form method="POST" action="{{ url('deces') }}" id="validationTopLabel" class="tooltip-end-top"
                            novalidate="novalidate">
                            @csrf
                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" name="nom_decedes">
                                <span>Nom du decedé</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" name="lieu_deces">
                                <span>Date de deces</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="number" name="age_decedes">
                                <span>Age du deceder</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" name="domicile_decedes">
                                <span>Domicile</span>
                            </label>


                            <center>
                                <h1 class="mb-0 pb-0 display-4" id="title"> Information sur le pere</h1>
                            </center>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" name="nom_pere">
                                <span>Nom du pere</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" name="demeur_pere">
                                <span>Domicile du pere</span>
                            </label>
                    

                            <center>
                                <h1 class="mb-0 pb-0 display-4" id="title"> Information sur la mere
                                </h1>
                            </center>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" name="nom_mere">
                                <span>Nom de la mère</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" name="demeur_mere">
                                <span>Domicile de la mere</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="date" name="date_fabrication">
                                <span>Date de fabrication</span>
                            </label>



                            {{-- <input class="form-control" type="text" name="status" value="attente"
                            style="display: none"> --}}


                            <select class="form-select" id="specificSizeSelect" name="declaration_deces_id">
                                <option selected="selected">Selectionner la declaration</option>
                                @foreach ($declarationdeces as $declarationdeces)
                                    <option value="{{ $declarationdeces->id }}">{{ $declarationdeces->id }} </option>
                                @endforeach
                            </select> <br>

                            <select class="form-select" id="specificSizeSelect" name="employer_id">
                                <option selected="selected">Selectionner l'employer</option>
                                @foreach ($employer as $employer)
                                    <option value="{{ $employer->id }}">{{ $employer->personne->nom }}
                                    </option>
                                @endforeach
                            </select> <br>


                            <button class="btn btn-primary" type="submit">
                                Ajouter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
