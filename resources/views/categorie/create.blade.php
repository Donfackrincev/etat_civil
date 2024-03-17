@extends('layouts.app')
@section('content')
    <form style="margin-top: 30px" method="POST" {{ url('fournisseur')}}>
        @csrf
        <p>AJOUTER UN FOURNISSEUR</p>
        <div class="form-row">

            <div class="col-md-12 mb-3">
                <input type="text" class="form-control " placeholder="Entrer le type" name="type" required>
            </div>

            <div class="col-md-12 mb-3">
                <input type="text" class="form-control" placeholder="entrer la description" name="description" required>
            </div>

            <div class="col-md-12 mb-3">
                <input type="number" class="form-control "  placeholder="entrer le numero de la categorie" name="numero" required>
            </div>


        </div>
        <button class="btn btn-primary btn-pill mr-2" type="submit" style="margin-left: 850px">Submit</button>
    </form>
@endsection
