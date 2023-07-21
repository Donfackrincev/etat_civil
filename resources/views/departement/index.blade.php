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
                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto add-datatable">
                        <i data-acorn-icon="plus"></i>
                        @if(Auth::User()->hasPermission('departements-create'))
                        <a href="{{url('departement/create')}}">
                            add new
                        </a>
                        {{-- <span>Add New</span> --}}
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<section class="scroll-section" id="alwaysResponsive">
    <div class="card mb-5">
        <div class="card-body">
            <table class="table">
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
                        <td>{{ $departement->nom_pays}}</td>
                        <td>{{ ($departement->region->nom_region )}}</td>
                        <td>{{ $departement->nom_departement}}</td>
                        <td>

                            <form method="POST" action="{{ url('/departement/delete/' . $departement->id)}}">
                                {{method_field('DELETE')}}
                                @csrf
                                @if(Auth::User()->hasPermission('departements-show'))

                                <a href="{{url('departement/' .$departement->id)}}">
                                    <button class="btn btn-info mb-1" type="button"> <i class="fa fa-eye"></i></button>
                                </a>
                                @endif
                                @if(Auth::User()->hasPermission('departements-update'))

                                <a href="{{url('departement/' .$departement->id. '/edit')}}">
                                    <button type="button" class="btn btn-secondary mb-1"> <i class="fa fa-pencil-square-o"></i> </button>
                                </a>
                                @endif
                                     @if(Auth::User()->hasPermission('departements-delete'))
                                <button class="btn btn-icon btn-icon-end btn-danger mb-1" type="submit">

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
