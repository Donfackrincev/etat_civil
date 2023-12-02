@extends('layouts.app')
@section('content')
    <main>

        {{--
        @if (session('status'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title-container">
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <h1 class="mb-0 pb-0 display-4" id="title">Liste des publication</h1>
                                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                                    <ul class="breadcrumb pt-0">
                                        <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="Interface.html">Interface</a></li>
                                        <li class="breadcrumb-item"><a href="Interface.Plugins.html">Plugins</a></li>
                                        <li class="breadcrumb-item"><a
                                                href="Interface.Plugins.Datatables.html">Datatables</a></li>
                                    </ul>
                                </nav>
                            </div>




                            <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                                <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                    data-bs-target="#nExample">Add New
                                </button>
                                <div class="btn-group ms-1 check-all-container">
                                    <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2"
                                        id="datatableCheckAllButton">
                                        <span class="form-check float-end">
                                            <input type="checkbox" class="form-check-input" id="datatableCheckAll">
                                        </span>
                                    </div>
                                    <button type="button"
                                        class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                        data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-submenu></button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <div class="dropdown dropstart dropdown-submenu">
                                            <button
                                                class="dropdown-item dropdown-toggle tag-datatable caret-absolute disabled"
                                                type="button">Tag</button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item tag-done" type="button">Done</button>
                                                <button class="dropdown-item tag-new" type="button">New</button>
                                                <button class="dropdown-item tag-sale" type="button">Sale</button>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <button class="dropdown-item disabled delete-datatable"
                                            type="button">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="data-table-rows slim">
                        <div class="row">
                            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                                <div
                                    class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                    <input class="form-control datatable-search" placeholder="Search"
                                        data-datatable="#datatableRowsServerSide">
                                    <span class="search-magnifier-icon">
                                        <i data-acorn-icon="search"></i>
                                    </span>
                                    <span class="search-delete-icon d-none">
                                        <i data-acorn-icon="close"></i>
                                    </span>
                                </div>
                            </div>


                            <!-- Modal d'jout de -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une Commune</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ url('publication') }}" novalidate="novalidate">
                                            @csrf
                                            <div class="modal-body">
                                                <label class="mb-3 top-label">
                                                    <input class="form-control" type="number" name="num_publication"
                                                        required="">
                                                    <span>Numero de la publication</span>
                                                </label>

                                                <label class="mb-3 top-label">
                                                    <input class="form-control" type="number" name="num_borderau"
                                                        required="">
                                                    <span>Numero borderau</span>
                                                </label>

                                                <label class="mb-3 top-label">
                                                    <input class="form-control" type="date" name="date_publication"
                                                        required="">
                                                    <span>Date</span>
                                                </label>

                                                <label class="mb-3 top-label">
                                                    <input class="form-control" type="text" name="montant_verser"
                                                        required="">
                                                    <span>Montan verser</span>
                                                </label>

                                                <select class="form-select" id="specificSizeSelect" name="employer_id">
                                                    <option selected="selected">Selectionner l'officier</option>
                                                    @foreach ($employer as $employer)
                                                        <option value="{{ $employer->id }}">{{ $employer->poste }}
                                                        </option>
                                                    @endforeach
                                                </select> <br>

                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                    value="annuler" />
                                                <input type="submit" class="btn btn-primary" value="Ajouter" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                                <div class="d-inline-block me-0 me-sm-3 float-start float-md-none">
                                    <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow "
                                        data-bs-toggle="modal" data-bs-target="#exampleModal" title="Add"
                                        type="button">
                                        <i data-acorn-icon="plus"></i>

                                    </button>

                                    <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow edit-datatable disabled"
                                        data-bs-delay="0" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Edit" type="button">
                                        <i data-acorn-icon="edit"></i>
                                    </button>
                                    <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow disabled delete-datatable"
                                        data-bs-delay="0" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Delete" type="button">
                                        <i data-acorn-icon="bin"></i>
                                    </button>
                                </div>
                                <div class="d-inline-block">
                                    <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow datatable-print"
                                        data-bs-delay="0" data-datatable="#datatableRowsServerSide"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Print" type="button">
                                        <i data-acorn-icon="print"></i>
                                    </button>
                                    <div class="d-inline-block datatable-export"
                                        data-datatable="#datatableRowsServerSide">
                                        <button class="btn p-0" data-bs-toggle="dropdown" type="button"
                                            data-bs-offset="0,3">
                                            <span
                                                class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                                                data-bs-delay="0" data-bs-placement="top" data-bs-toggle="tooltip"
                                                title="Export">
                                                <i data-acorn-icon="download"></i>
                                            </span>
                                        </button>
                                        <div class="dropdown-menu shadow dropdown-menu-end">
                                            <button class="dropdown-item export-copy" type="button">Copy</button>
                                            <button class="dropdown-item export-excel" type="button">Excel</button>
                                            <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                        </div>
                                    </div>
                                    <div class="dropdown-as-select d-inline-block datatable-length"
                                        data-datatable="#datatableRowsServerSide" data-childselector="span">
                                        <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
                                            <span class="btn btn-foreground-alternate dropdown-toggle"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay="0"
                                                title="Item Count">
                                                10 Items
                                            </span>
                                        </button>
                                        <div class="dropdown-menu shadow dropdown-menu-end">
                                            <a class="dropdown-item" href="#">5 Items</a>
                                            <a class="dropdown-item active" href="#">10 Items</a>
                                            <a class="dropdown-item" href="#">20 Items</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="data-table-responsive-wrapper">
                            <table id="datatableRowsServerSide" class="data-table nowrap hover">
                                <thead>
                                    <tr>
                                        <th class="text-muted text-small text-uppercase">N</th>
                                        <th class="text-muted text-small text-uppercase">Num_Publication</th>
                                        <th class="text-muted text-small text-uppercase">Num_Bordereau</th>
                                        <th class="text-muted text-small text-uppercase">Date</th>
                                        <th class="text-muted text-small text-uppercase">Montant</th>
                                        <th class="text-muted text-small text-uppercase">Officier</th>
                                        <th class="empty">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($publication as $publication)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $publication->num_publication }}</td>
                                            <td>{{ $publication->num_borderau }}</td>
                                            <td>{{ $publication->date_publication }}</td>
                                            <td>{{ $publication->montant_verser }}</td>
                                            <td>{{ $publication->employer->poste }}</td>
                                            <td>

                                                <form method="POST"
                                                    action="{{ url('/publication/delete/' . $publication->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    @if (Auth::User()->hasPermission('publications-show'))
                                                        <a href="{{ url('publication/' . $publication->id) }}">
                                                            <button type="button" class="btn btn-secondary mb-1">
                                                                <i class="fa fa-eye"></i>
                                                            </button>
                                                        </a>
                                                    @endif
                                                    @if (Auth::User()->hasPermission('publications-update'))
                                                        <a href="{{ url('publication/' . $publication->id . '/edit') }}">
                                                            <button type="button" class="btn btn-outline-primary mb-1"
                                                                data-bs-toggle="modal" data-bs-target="#smExample">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </button>
                                                        </a>
                                                    @endif
                                                    @if (Auth::User()->hasPermission('publications-delete'))
                                                        <button class="btn btn-icon btn-icon-end btn-danger mb-1"
                                                            type="submit"
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



                    <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog"
                        aria-labelledby="modalTitle" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="addEditConfirmButton">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
