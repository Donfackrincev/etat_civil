@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Ajouter un departement</h1>
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
                    <form method="POST" action="{{ url('departement') }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_pays">
                            <span>Nom du pays</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="region_id">
                            <option disabled>Selectionner la region</option>
                            @foreach($region as $region)
                            <option value="{{ $region->id }}" {{isset($departement) && $departement->region->id==$region->id ? 'selected="selected"' : ''}}>{{ $region->nom_region}}</option>
                            @endforeach
                        </select> <br>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_departement">
                            <span>Nom du departement</span>
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
