@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Ajouter un nouveau medecin</h1>
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
                    <form method="POST" action="{{ url('medecin') }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf
                        <select class="form-select" id="specificSizeSelect" name="personne_id">
                            <option selected="selected">Selectionner la personne</option>
                            @foreach($personne as $personne)
                            <option value="{{ $personne->id }}">{{ $personne->id}} </option>
                            @endforeach
                        </select> <br>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="texte" name="nom_centre" required="">
                            <span>Nom de l'hopital</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="fontion">
                            <option selected="selected">Selectionner le medecin</option>
                            <option value="sage_femme">Sage femme</option>
                            <option value="infimier">Infimier</option>
                            <option value="docteur">Docteur</option>
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
