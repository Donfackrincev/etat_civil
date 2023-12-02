@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">Liste des departements</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="Interface.html">departements</a></li>
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


    <div class="modal fade" id="nExample" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un departement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('region') }}" novalidate="novalidate">
                        @csrf
                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_pays">
                            <span>Nom du pays</span>
                        </label>

                        <select class="form-select" id="specificSizeSelect" name="region_id">
                            <option disabled>Selectionner la region</option>
                            @foreach ($region as $region)
                                <option value="{{ $region->id }}">{{ $region->nom_region }}</option>
                            @endforeach
                        </select> <br>

                        <label class="mb-3 top-label">
                            <input class="form-control" type="text" name="nom_departement">
                            <span>Nom du departement</span>
                        </label>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </div>
    </div>







    <section class="scroll-section" id="alwaysResponsive">
        <div class="card mb-5">
            <div class="card-body">
                <table class="table">
                    <div class="col-12 col-md-5 d-flex align-items-start justify-content-end" style="margin-left: 50%">
                        @if (Auth::User()->hasPermission('departements-create'))
                            <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                data-bs-target="#nExample">
                                <i data-acorn-icon="plus"></i>
                                add
                            </button>
                        @endif
                    </div>
                    <thead>
                        <tr>
                            <th scope="col">N</th>
                            <th scope="col">pays</th>
                            <th scope="col">region</th>
                            <th scope="col">departement</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($departement as $departement)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $departement->nom_pays }}</td>
                                <td>{{ $departement->region->nom_region }}</td>
                                <td>{{ $departement->nom_departement }}</td>
                                <td>

                                    <form method="POST" action="{{ url('/departement/delete/' . $departement->id) }}">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                        @if (Auth::User()->hasPermission('departements-show'))
                                            <a href="{{ url('departement/' . $departement->id) }}">
                                                <button class="btn btn-info mb-1" type="button"> <i
                                                        class="fa fa-eye"></i></button>
                                            </a>
                                        @endif
                                        @if (Auth::User()->hasPermission('departements-update'))
                                            <a href="{{ url('departement/' . $departement->id . '/edit') }}">
                                                <button type="button" class="btn btn-secondary mb-1"> <i
                                                        class="fa fa-pencil-square-o"></i> </button>
                                            </a>
                                        @endif
                                        @if (Auth::User()->hasPermission('departements-delete'))
                                            <button class="btn btn-icon btn-icon-end btn-danger mb-1" type="submit"
                                                onclick="return confirm('voulez vous vraiment supprimer')">

                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endif
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
