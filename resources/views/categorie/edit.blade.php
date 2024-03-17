
@extends('layouts.app')
@section('content')
    <form style="margin-top: 30px" method="POST" action="{{ url('categorie/' . $categorie->id) }}">
        @csrf
        {{ method_field('PATCH') }}
        <p>AJOUTER UNE CATEGORIE</p>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <input type="text" class="form-control" placeholder="entrer le type" name="type" value="{{ $categorie->type }}">
            </div>

            <div class="col-md-12 mb-3">
                <input type="text" class="form-control " placeholder="Entrer la description" name="description" value="{{ $categorie->description }}">
            </div>

            <div class="col-md-12 mb-3">
                <input type="number" class="form-control "  placeholder="entrer le numero" name="numero" value="{{ $categorie->numero }}">
            </div>


        </div>
        <button class="btn btn-primary btn-pill mr-2" type="submit" style="margin-left: 850px">Submit</button>
    </form>
@endsection
