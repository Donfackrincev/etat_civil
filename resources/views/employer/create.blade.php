@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Ajouter un nouveau employer</h1>
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
                    <form method="POST" action="{{ url('employer') }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf

                        <select class="form-select" id="specificSizeSelect" name="poste">
                            <option selected="selected">Selectionner le poste</option>
                            <option value="maire">Maire</option>
                            <option value="secretaire">Secretaire</option>
                            <option value="statisticient">Statisticien</option>
                            <option value="officier_naissance">Officier de naissance</option>
                            <option value="officier_deces">Officier de deces</option>
                            <option value="officier_mariage">Officier de mariage</option>
                        </select> <br>


                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="date_prise_foncton" required="">
                            <span>Debut de fonction</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="personne_id">
                            <option selected="selected">Selectionner le Nom</option>
                            @foreach($personne as $personne)
                            <option value="{{ $personne->id }}">{{ $personne->nom}} </option>
                            @endforeach
                        </select> <br>

                        <select class="form-select" id="specificSizeSelect" name="commune_id">
                            <option selected="selected">Selectionner la commune</option>
                            @foreach($commune as $commune)
                            <option value="{{ $commune->id }}">{{ $commune->nom_commune }} </option>
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
