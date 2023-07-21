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
                    <form method="POST" action="{{url('declaration/' . $declaration->id) }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf
                        {{method_field('PATCH')}}

                        <select class="form-select" id="specificSizeSelect" name="personne_id">
                            <option selected="selected">Selectionner le Nom</option>
                            @foreach($personne as $personne)
                            <option value="{{ $personne->id }}">{{ $personne->id}} </option>
                            @endforeach
                        </select> <br>
                       

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" value="{{ $declaration->etat }}"  name="etat" required="">
                            <span>Etat de l'enfant</span>
                        </label>


                        <select class="form-select" id="specificSizeSelect" name="medecin_id">
                            <option selected="selected">Selectionner la medecin</option>
                            @foreach($medecin as $medecin)
                            <option value="{{ $medecin->id }}">{{ $medecin->id }} </option>
                            @endforeach
                        </select> <br>


                        <button class="btn btn-primary" type="submit">
                            Modifier
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
