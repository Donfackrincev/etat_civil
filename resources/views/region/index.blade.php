@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">Liste des regions</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="Interface.html">regions</a></li>
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
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ url('region') }}" novalidate="novalidate">
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
                        @if (Auth::User()->hasPermission('regions-create'))
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
                            <th scope="col">Region</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Chef lieu</th>
                            <th scope="col">Action</th>


                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($region as $region)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $region->nom_region }}</td>
                                <td>{{ $region->nom_pays }}</td>
                                <td>{{ $region->chef_lieu }}</td>
                                <td>

                                    <form method="POST" action="{{ url('/region/delete/' . $region->id) }}">
                                        {{ method_field('DELETE') }}
                                        @csrf

                                        <a href="{{ url('region/' . $region->id) }}">
                                            <button class="btn btn-info mb-1" type="button"> <i
                                                    class="fa fa-eye"></i></button>
                                        </a>

                                        @if (Auth::User()->hasPermission('regions-update'))
                                            <a href="{{ url('region/' . $region->id . '/edit') }}">
                                                <button type="button" class="btn btn-outline-primary mb-1" >
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </button>
                                            </a>
                                        @endif
                                        @if (Auth::User()->hasPermission('regions-delete'))
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
                <div class="d-flex justify-content-center">
                </div>
            </div>
        </div>
    </section>
@endsection
