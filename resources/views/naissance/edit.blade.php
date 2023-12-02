@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Modifier un acte de naissance</h1>
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
                       <form method="POST" action="{{url('naissance/' . $naissance->id) }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf
                        {{method_field('PATCH')}}

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_enfant" value="{{$naissance->nom_enfant}}" required="">
                            <span>Nom de l'enfant</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="date_naissance" value="{{$naissance->date_naissance}}"required="">
                            <span>Date de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_naissance" value="{{$naissance->lieu_naissance}}" required="">
                            <span>lieu_naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_enfant1" value="{{$naissance->nom_enfant1}}" required="">
                            <span>nom de l'enfant</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="sexe" value="{{$naissance->sexe}}" required="">
                            <span>sexe</span>
                        </label>
         <center> <h1 class="mb-0 pb-0 display-4" id="title"> Information sur la mere</h1></center>  

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_pere"value="{{$naissance->nom_pere}}" required="">
                            <span> Nom du pere</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_naissance_pere" value="{{$naissance->lieu_naissance_pere}}" required="">
                            <span>Lieu de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="naissance_pere" value="{{$naissance->naissance_pere}}" required="">
                            <span>Date de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="domicile" value="{{$naissance->domicile}}" required="">
                            <span>Domicile</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="profession_pere" value="{{$naissance->profession_pere}}" required="">
                            <span>Profession</span>
                        </label>
         <center> <h1 class="mb-0 pb-0 display-4" id="title"> Information sur la mere</h1></center>  

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_mere" value="{{$naissance->nom_mere}}" required="">
                            <span>Nom de la mere</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_naissance_mere" value="{{$naissance->lieu_naissance_mere}}" required="">
                            <span>Lieu de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="naissance_mere" value="{{$naissance->naissance_mere}}" required="">
                            <span>Date de naissance</span>
                        </label>
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="Domiciliere_mere" value="{{$naissance->Domiciliere_mere}}" required="">
                            <span>Domicile</span>
                        </label>
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="profession_mere" value="{{$naissance->profession_mere}}" required="">
                            <span>Profession</span>
                        </label>
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="dresser_le" value="{{$naissance->dresser_le}}" required="">
                            <span>Dresser le</span>
                        </label>


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
