
@extends('layouts.app')
@section('content')
    <form style="margin-top: 30px" method="POST" action="{{ url('fournisseur/' . $fournisseur->id) }}">
        @csrf
        {{ method_field('PATCH') }}
        <p>AJOUTER UN FOURNISSEUR</p>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <input type="text" class="form-control" placeholder="entrer le nom" name="nom" value="{{ $fournisseur->nom }}">
            </div>

            <div class="col-md-12 mb-3">
                <input type="email" class="form-control " placeholder="Entrer l'adresse email" name="email" value="{{ $fournisseur->email }}">
            </div>

            <div class="col-md-12 mb-3">
                <input type="number" class="form-control "  placeholder="entrer le numero" name="numero" value="{{ $fournisseur->numero }}">
            </div>

            <div class="col-md-12 mb-3">
                <input type="text" class="form-control"  placeholder="Entrer le pays" name="pays" value="{{ $fournisseur->pays }}">
            </div>
            <div class="col-md-12 mb-3">
                <input type="text" class="form-control"  placeholder="Entrer la ville" name="ville" value="{{ $fournisseur->ville }}">
            </div>
        </div>
        <button class="btn btn-primary btn-pill mr-2" type="submit" style="margin-left: 850px">Submit</button>
    </form>
@endsection
