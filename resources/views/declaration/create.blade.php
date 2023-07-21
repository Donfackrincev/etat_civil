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
                    <form method="POST" action="{{ url('declaration') }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text"  name="nom" required="">
                            <span>Nom</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text"  name="prenom" required="">
                            <span>Prenom</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="sexe">
                            <option disabled>Selectionner le sexe</option>
                            <option value="Masculin" {{isset($declaration) && $declaration->sexe==Masculin ? 'selected="selected"' : ''}}>Masculin</option>
                            <option value="Feminin" {{isset($declaration) && $declaration->sexe==Feminin ? 'selected="selected"' : ''}}>Feminin</option>
                        </select> <br>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text"  name="nationaliter" required="">
                            <span>Nationaliter</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text"  name="lieu_naissance" required="">
                            <span>Lieu de naissance</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text"  name="nom_pere" required="">
                            <span>Nom du pere</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text"  name="nom_mere" required="">
                            <span>Nom de la mere</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text"  name="domicile" required="">
                            <span>Domicil</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" id="date_naissance" name="date" required="" onchange="calcul()">
                            <span>date naissance</span>
                        </label>


                        <script>
                            function calcul() {

                                let date = document.getElementById('date_naissance').value;
                                let d1 = new Date(date);
                                let d2 = new Date();
                                diffTime = d2.getTime() - d1.getTime();
                                diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));                               

                                console.log(date);
                                console.log(d1);
                                console.log(d2);
                                console.log(diffTime);
                                console.log(diffDays);

                            }

                        </script>

                
                        <select class="form-select" id="specificSizeSelect" name="medecin_id">
                            <option selected="selected">Selectionner la medecin</option>
                            @foreach($medecin as $medecin)
                            <option value="{{ $medecin->id }}">{{ $medecin->id }} </option>
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
