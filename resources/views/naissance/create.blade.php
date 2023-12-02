@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Ajouter un naissance</h1>
                </div>
            </div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
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
                    <form method="POST" action="{{ url('naissance') }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_enfant">
                            <span>Nom de l'enfant</span>
                        </label>
                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="date_naissance">
                            <span>Date de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_naissance">
                            <span>Lieu de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_enfant1">
                            <span>Nom de l'enfant</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="sexe">
                            <option disabled>Selectionner le sexe</option>
                            <option value="Masculin" {{isset($personne) && $personne->sexe==Masculin ? 'selected="selected"' : ''}}>Masculin</option>
                            <option value="Feminin" {{isset($personne) && $personne->sexe==Feminin ? 'selected="selected"' : ''}}>Feminin</option>
                        </select> <br>
         <center> <h1 class="mb-0 pb-0 display-4" id="title"> Information sur le pere</h1></center>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_pere">
                            <span>Nom du pere</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_naissance_pere">
                            <span>Lieu naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="naissance_pere">
                            <span>Date de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="domicile">
                            <span>Domicile</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="profession_pere">
                            <span>Profession</span>
                        </label>
         <center> <h1 class="mb-0 pb-0 display-4" id="title"> Information sur la mere</h1></center>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_mere">
                            <span>Nom de la mère</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_naissance_mere">
                            <span>lieu naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="naissance_mere">
                            <span>Date de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="Domiciliere_mere">
                            <span>Domicile</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="profession_mere">
                            <span>Profession</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="dresser_le">
                            <span>Dresser le</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="email" name="email">
                            <span>email</span>
                        </label>

                            <input class="form-control" type="text" name="status" value="attente" style="display: none">


                      <select class="form-select" id="specificSizeSelect" name="declaration_naissance_id">
                            <option selected="selected">Selectionner la declaration</option>
                            @foreach($declaration as $declaration)
                            <option value="{{ $declaration->id }}">{{ $declaration->id }} </option>
                            @endforeach
                        </select> <br>

                      <select class="form-select" id="specificSizeSelect" name="employer_id">
                            <option selected="selected">Selectionner l'employer</option>
                            @foreach($employer as $employer)
                            <option value="{{ $employer->id }}">{{ $employer->personne_id }} </option>
                            @endforeach
                        </select> <br>

                      <select class="form-select" id="specificSizeSelect" name="commune_id">
                            <option selected="selected">Selectionner la commune</option>
                            @foreach($commune as $commune)
                            <option value="{{ $commune->id }}">{{ $commune->nom_commune }} </option>
                            @endforeach
                        </select> <br>

                        <select class="form-select" id="specificSizeSelect" name="region_id">
                            <option selected="selected">Selectionner la region</option>
                            @foreach($region as $region)
                            <option value="{{ $region->id }}">{{ $region->nom_region }} </option>
                            @endforeach
                        </select> <br>

                        <select class="form-select" id="specificSizeSelect" name="departement_id">
                            <option selected="selected">Selectionner departement</option>
                            @foreach($departement as $departement)
                            <option value="{{ $departement->id }}">{{ $departement->nom_departement }} </option>
                            @endforeach
                        </select> <br>
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="assistant_officier">
                            <span>Assistant</span>
                        </label>

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
