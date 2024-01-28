@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">MODIFICATION </h1>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card mb-5">
                    <div class="card-body">
                        <form method="POST" action="{{ url('commune/' . $commune->id) }}" id="validationTopLabel"
                            class="tooltip-end-top" novalidate="novalidate">
                            @csrf
                            {{ method_field('PATCH') }}

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" value="{{ $commune->nom_commune }}"
                                    name="nom_commune" required="">
                                <span>Nom</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" value="{{ $commune->ville }}" name="ville"
                                    required="">
                                <span>Ville</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" value="{{ $commune->arrondissement }}"
                                    name="arrondissement" required="">
                                <span>Arrondissement</span>
                            </label>



                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" value="{{ $commune->numero }}" name="numero"
                                    required="">
                                <span>Numero</span>
                            </label>

                            <label class="mb-3 top-label">
                                <input class="form-control" type="text" value="{{ $commune->email }}" name="email"
                                    required="">
                                <span>Email</span>
                            </label>


                            <select class="form-select" id="specificSizeSelect" name="departement_id">
                                <option selected="selected">Selectionner le departement</option>
                                @foreach ($departement as $departement)
                                    <option value="{{ $departement->id }}">{{ $departement->nom_departement }} </option>
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
