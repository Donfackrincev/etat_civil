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
                    <form method="POST" action="{{ url('personne') }}" id="validationTopLabel" enctype="multipart/form-data" class="tooltip-end-top" novalidate="novalidate">
                        @csrf

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom" required="">
                            <span>Nom </span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="prenom" required="">
                            <span>Prenom</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="number" name="numero" required="">
                            <span>Numero</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="email" name="email" required="">
                            <span>Email</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="domicile" required="">
                            <span>Domicile</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="number" name="cni" required="">
                            <span>Numero de la CNI</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nationaliter" required="">
                            <span>Nationalité</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="profession" required="">
                            <span>Profession</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="date_naissance" required="">
                            <span>Date de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_naissance" required="">
                            <span>Lieu de naissance</span>
                        </label>
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_pere" required="">
                            <span>Nom du pere</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_mere" required="">
                            <span>Nom de la mere</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="sexe">
                            <option disabled>Selectionner le sexe</option>
                            <option value="1" {{isset($personne) && $personne->sexe==Masculin ? 'selected="selected"' : ''}}>Masculin</option>
                            <option value="2" {{isset($personne) && $personne->sexe==Feminin ? 'selected="selected"' : ''}}>Feminin</option>
                        </select> <br>

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
