@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Ajouter une nouvelle region</h1>
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
                    <form method="POST" action="{{url('region/' . $region->id) }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf
                         {{method_field('PATCH')}}

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_region" value="{{ $region->nom_region }}" required="">
                            <span>Nom de la region</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_pays" value="{{ $region->nom_pays }}" required="">
                            <span>Nom du pays</span>
                        </label>
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="chef_lieu" value="{{ $region->chef_lieu }}" required="">
                            <span>Chef lieu</span>
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