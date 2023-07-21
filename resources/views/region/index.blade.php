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
                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                    @if(Auth::User()->hasPermission('regions-create'))

                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto add-datatable">
                        <i data-acorn-icon="plus"></i>
                        <a href="{{url('region/create')}}">
                            add new
                        </a>
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
                        <td>{{ $region->nom_region}}</td>
                        <td>{{ $region->nom_pays }}</td>
                        <td>{{ $region->chef_lieu }}</td>
                        <td>

                            <form method="POST" action="{{ url('/region/delete/' . $region->id)}}">
                                {{method_field('DELETE')}}
                                @csrf

                                <a href="{{url('region/' .$region->id)}}">
                                    <button class="btn btn-info mb-1" type="button"> <i class="fa fa-eye"></i></button>
                                </a>

                                @if(Auth::User()->hasPermission('regions-update'))

                                <a href="{{url('region/' .$region->id. '/edit')}}">
                                    <button type="button" class="btn btn-secondary mb-1"> <i class="fa fa-pencil-square-o"></i> </button>
                                </a>
                                @endif
                                @if(Auth::User()->hasPermission('regions-delete'))
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
