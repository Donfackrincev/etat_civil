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
                    <form method="POST" action="{{ url('commune') }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_commune" required="">
                            <span>Nom de la commune</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="ville" required="">
                            <span>Ville</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="arrondissement" required="">
                            <span>Arrondissement</span>
                        </label>


                        <label class="mb-3 top-label">
                            <input class="form-control" type="number" name="numero" required="">
                            <span>Numero</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="email" required="">
                            <span>Email</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="departement_id">
                            <option selected="selected">Selectionner le departement</option>
                            @foreach($departement as $departement)
                            <option value="{{ $departement->id }}">{{ $departement->nom_departement}} </option>
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
