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
                       <form method="POST" action="{{url('personne/' . $personne->id) }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf
                        {{method_field('PATCH')}}

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom" value="{{$personne->nom}}" required="">
                            <span>Nom de la commune</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="prenom" value="{{$personne->prenom}}"required="">
                            <span>Prenom</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="number" name="numero" value="{{$personne->numero}}" required="">
                            <span>Numero</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="email" name="email" value="{{$personne->email}}" required="">
                            <span>Email</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="domicile" value="{{$personne->domicile}}" required="">
                            <span>Domicile</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="number" name="cni"value="{{$personne->cni}}" required="">
                            <span>Numero de la CNI</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nationaliter" value="{{$personne->nationaliter}}" required="">
                            <span>Nationalité</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="profession" value="{{$personne->profession}}" required="">
                            <span>Profession</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="date_naissance" value="{{$personne->date_naissance}}" required="">
                            <span>Date de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_naissance" value="{{$personne->lieu_naissance}}" required="">
                            <span>Lieu de naissance</span>
                        </label>
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_pere" value="{{$personne->nom_pere}}" required="">
                            <span>Nom du pere</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_mere" value="{{$personne->nom_mere}}" required="">
                            <span>Nom de la mere</span>
                        </label>

                    

                        <label class="mb-3 top-label">
                            <input class="form-control" type="file" name="photo" required="">
                            <span>Choisier une photo</span>
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
