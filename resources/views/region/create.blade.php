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
                    <center>
                        <img src="{{ asset('assets/img/camer.png') }}" class="imm" alt="card image"
                            style="width: 4%">
                    </center>
                    <form method="POST" action="{{ url('region') }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf


                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_region" required="">
                            <span>Nom de la region</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_pays" required="">
                            <span>Nom du pays</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="chef_lieu" required="">
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
