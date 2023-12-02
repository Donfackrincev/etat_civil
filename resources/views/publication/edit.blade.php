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
                    <form method="POST" action="{{url('publication/' . $publication->id) }}" id="validationTopLabel" class="tooltip-end-top" novalidate="novalidate">
                        @csrf
                        {{method_field('PATCH')}}

                        <label class="mb-3 top-label">
                            <input class="form-control" type="number" value="{{  $publication->num_publication }}" name="num_publication" required="">
                            <span>Numero de de la publication</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="number" value="{{$publication->num_borderau}}" name="num_borderau" required="">
                            <span>Numero de borderaux</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" value="{{ $publication->date_publication }}" name="date_publication" required="">
                            <span>date de publication</span>
                        </label>



                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" value="{{ $publication->montant_verser }}" name="montant_verser" required="">
                            <span>Montant verser</span>
                        </label>

                       
                        <select class="form-select" id="specificSizeSelect" name="employer_id">
                            <option selected="selected">Selectionner l'officier</option>
                              @foreach($employer as $employer)
                            <option value="{{ $employer->id }}">{{ $employer->poste }} </option>
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
