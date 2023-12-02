@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">modifier un departement</h1>
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
                    <form method="POST" action="{{url('declarationdeces/' . $declarationdeces->id) }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf
                         {{method_field('PATCH')}}

                         <label class="mb-3 top-label">
                            <input class="form-control" value="{{$declarationdeces->nom_deces}}" type="text" name="nom_deces" required="">
                            <span>Nom du decedé</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" value="{{$declarationdeces->domicile}}" name="domicile" required="">
                            <span>Domicil</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" value="{{$declarationdeces->date_deces}}" name="date_deces" required="">
                            <span>Date deces</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" value="{{$declarationdeces->motif_deces}}" name="motif_deces" required="">
                            <span>Motif deces</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" value="{{$declarationdeces->lieu_deces}}" name="lieu_deces" required="">
                            <span>Lieu de deces</span>
                        </label>

                        {{-- <select class="form-select" id="specificSizeSelect" name="personne_id">
                            <option selected="selected">Selectionner la personne</option>
                            @foreach($personne as $personne)
                            <option value="{{ $personne->id }}">{{ $personne->id}} </option>
                            @endforeach
                        </select> <br>

                        <select class="form-select" id="medecin" name="medecin_id">
                            <option selected="selected">Selectionner la medecin</option>
                            @foreach ($medecin as $medecin)
                                <option value="{{ $medecin->id }}">{{ $medecin->personne->nom }} </option>
                            @endforeach
                        </select> <br> --}}
                        
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