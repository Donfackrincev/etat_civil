@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">Liste des declaration deces</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="Interface.html">declaration deces</a></li>
                                <li class="breadcrumb-item"><a href="Interface.Plugins.html">Liste</a>
                                </li>
                                {{-- <li class="breadcrumb-item"><a href="Interface.Plugins.Datatables.html">Datatables</a></li> --}}
                            </ul>
                        </nav>
                    </div>



                </div>
            </div>
        </div>
    </div>
    {{-- ajouterr --}}
    <div class="modal fade" id="nExample" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aouter une decclaration de deces</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ url('declarationdeces') }}" novalidate="novalidate">
                        @csrf

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_deces" required="">
                            <span>Nom du decedé</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="domicile" required="">
                            <span>Domicil</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="date" name="date_deces" required="">
                            <span>Date deces</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="motif_deces" required="">
                            <span>Motif deces</span>
                        </label>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="lieu_deces" required="">
                            <span>Lieu de deces</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="personne_id">
                            <option selected="selected">Selectionner la personne</option>
                            @foreach($personne as $personne)
                            <option value="{{ $personne->id }}">{{ $personne->id}} </option>
                            @endforeach
                        </select> <br>

                        <select class="form-select" id="medecin" name="medecin_id">
                            <option selected="selected">Selectionner la medecin</option>
                            @foreach ($medecin as $medecin)
                                <option value="{{ $medecin->id }}">{{ $medecin->nom }} </option>
                            @endforeach
                        </select> <br>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




    <section class="scroll-section" id="alwaysResponsive">
        <div class="card mb-5">
            <div class="card-body">
                <table class="table">
                    <div class="col-12 col-md-5 d-flex align-items-start justify-content-end" style="margin-left: 50%">
                            <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                data-bs-target="#nExample">
                                <i data-acorn-icon="plus"></i>
                                add
                            </button>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col">N</th>
                            <th scope="col">Nom </th>
                            <th scope="col">Domicile</th>
                            <th scope="col">Date deces</th>
                            <th scope="col">Motif deces</th>
                            <th scope="col">Lieu deces</th>
                            <th scope="col">Medecin declarant</th>
                            <th scope="col">Action</th>


                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($declarationdeces as $declarationdeces)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $declarationdeces->nom_deces }}</td>
                                <td>{{ $declarationdeces->domicile }}</td>
                                <td>{{ $declarationdeces->date_deces }}</td>
                                <td>{{ $declarationdeces->motif_deces }}</td>
                                <td>{{ $declarationdeces->lieu_deces }}</td>
                                <td>{{ $declarationdeces->medecin->fontion }}</td>


                                <td>

                                    <form method="POST" action="{{ url('/declarationdeces/delete/' . $declarationdeces->id) }}">
                                        {{ method_field('DELETE') }}
                                        @csrf

                                        <a href="{{ url('declarationdeces/' . $declarationdeces->id) }}">
                                            <button class="btn btn-info mb-1" type="button"> <i
                                                    class="fa fa-eye"></i></button>
                                        </a>

                                            <a href="{{ url('declarationdeces/' . $declarationdeces->id . '/edit') }}">
                                                <button type="button" class="btn btn-outline-primary mb-1" >
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </button>
                                            </a>
                                            <button class="btn btn-icon btn-icon-end btn-danger mb-1" type="submit"
                                                onclick="return confirm('voulez vous vraiment supprimer')">

                                                <i class="fa fa-trash"></i>
                                            </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
