@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title-container">
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <h1 class="mb-0 pb-0 display-4" id="title">LISTE DES ACTES DE NAISSANCE</h1>
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

                    <!-- Modal d'jout de -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveaux acte de naissance
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ url('naissance') }}" novalidate="novalidate">
                                    @csrf
                                    <div class="modal-body">
                                        <form method="POST" action="{{ url('naissance') }}" id="validationTopLabel"
                                            class="tooltip-end-top" novalidate="novalidate">
                                            @csrf

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="nom_enfant">
                                                <span>Nom de l'enfant</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="date_naissance">
                                                <span>Date de naissance</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="lieu_naissance">
                                                <span>Lieu de naissance</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="nom_enfant1">
                                                <span>Nom de l'enfant</span>
                                            </label>

                                            <select class="form-select" id="specificSizeSelect" name="sexe">
                                                <option disabled>Selectionner le sexe</option>
                                                <option value="Masculin"
                                                    {{ isset($personne) && $personne->sexe == Masculin ? 'selected="selected"' : '' }}>
                                                    Masculin</option>
                                                <option value="Feminin"
                                                    {{ isset($personne) && $personne->sexe == Feminin ? 'selected="selected"' : '' }}>
                                                    Feminin</option>
                                            </select> <br>
                                            <center>
                                                <h1 class="mb-0 pb-0 display-4" id="title"> Information sur le pere</h1>
                                            </center>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="nom_pere">
                                                <span>Nom du pere</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="lieu_naissance_pere">
                                                <span>Lieu naissance</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="date" name="naissance_pere">
                                                <span>Date de naissance</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="domicile">
                                                <span>Domicile</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="profession_pere">
                                                <span>Profession</span>
                                            </label>
                                            <center>
                                                <h1 class="mb-0 pb-0 display-4" id="title"> Information sur la mere
                                                </h1>
                                            </center>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="nom_mere">
                                                <span>Nom de la mère</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="lieu_naissance_mere">
                                                <span>lieu naissance</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="date" name="naissance_mere">
                                                <span>Date de naissance</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="Domiciliere_mere">
                                                <span>Domicile</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="profession_mere">
                                                <span>Profession</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="dresser_le">
                                                <span>Dresser le</span>
                                            </label>

                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="email" name="email">
                                                <span>email</span>
                                            </label>

                                            <input class="form-control" type="text" name="status" value="attente"
                                                style="display: none">


                                            <select class="form-select" id="specificSizeSelect"
                                                name="declaration_naissance_id">
                                                <option selected="selected">Selectionner la declaration</option>
                                                @foreach ($declaration as $declaration)
                                                    <option value="{{ $declaration->id }}">{{ $declaration->id }} </option>
                                                @endforeach
                                            </select> <br>

                                            <select class="form-select" id="specificSizeSelect" name="employer_id">
                                                <option selected="selected">Selectionner l'employer</option>
                                                @foreach ($employer as $employer)
                                                    <option value="{{ $employer->id }}">{{ $employer->personne_id }}
                                                    </option>
                                                @endforeach
                                            </select> <br>

                                            <select class="form-select" id="specificSizeSelect" name="commune_id">
                                                <option selected="selected">Selectionner la commune</option>
                                                @foreach ($commune as $commune)
                                                    <option value="{{ $commune->id }}">{{ $commune->nom_commune }}
                                                    </option>
                                                @endforeach
                                            </select> <br>

                                            <select class="form-select" id="specificSizeSelect" name="region_id">
                                                <option selected="selected">Selectionner la region</option>
                                                @foreach ($region as $region)
                                                    <option value="{{ $region->id }}">{{ $region->nom_region }}
                                                    </option>
                                                @endforeach
                                            </select> <br>

                                            <select class="form-select" id="specificSizeSelect" name="departement_id">
                                                <option selected="selected">Selectionner departement</option>
                                                @foreach ($departement as $departement)
                                                    <option value="{{ $departement->id }}">
                                                        {{ $departement->nom_departement }} </option>
                                                @endforeach
                                            </select> <br>
                                            <label class="mb-3 top-label">
                                                <input class="form-control" type="text" name="assistant_officier">
                                                <span>Assistant</span>
                                            </label>
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


                            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                                <div class="d-inline-block me-0 me-sm-3 float-start float-md-none">
                                    <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow "
                                        data-bs-toggle="modal" data-bs-target="#exampleModal" title="Add"
                                        type="button">
                                        <i data-acorn-icon="plus"></i>

                                    </button>

                                    {{-- @if (Auth::User()->hasPermission('acte_naissances-create'))
                                        <button
                                            class="btn btn-icon btn-icon-only btn-foreground-alternate shadow add-datatable"
                                            title="Add" type="button">
                                            <a href="{{ url('naissance/create') }}">
                                                <i data-acorn-icon="plus"></i>
                                            </a>
                                        </button>
                                    @endif --}}

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
                                        <th class="text-muted text-small text-uppercase">Nom & Prenom</th>
                                        <th class="text-muted text-small text-uppercase">date_naissance</th>
                                        <th class="text-muted text-small text-uppercase">lieu_naissance</th>
                                        <th class="text-muted text-small text-uppercase">sexe</th>
                                        <th class="text-muted text-small text-uppercase">Nom du pere</th>
                                        <th class="text-muted text-small text-uppercase">Departement</th>
                                        <th class="text-muted text-small text-uppercase">Statut</th>
                                        <th class="empty">&nbsp;</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($naissance as $naissance)
                                        <tr>
                                            <td scope="row">{{ $naissance->id }}</td>
                                            <td>{{ $naissance->nom_enfant }}</td>
                                            <td>{{ $naissance->date_naissance }}</td>
                                            <td>{{ $naissance->lieu_naissance }}</td>
                                            <td>{{ $naissance->sexe }}</td>
                                            <td>{{ $naissance->nom_pere }}</td>
                                            <td>{{ $naissance->dresser_le }}</td>
                                            <td>{{ $naissance->status }}</td>

                                            <td>

                                                <form method="POST"
                                                    action="{{ url('/naissance/delete/' . $naissance->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    @if (Auth::User()->hasPermission('acte_naissances-show'))
                                                        @if ($naissance->status == 'Rejeter')
                                                            <a href="{{ url('naissance/' . $naissance->id) }}" style="display: none">
                                                                <button type="button" class="btn btn-primary mb-1">
                                                                    <i class="fa fa-print"></i>
                                                                </button>
                                                            </a>
                                                            
                                                            @else
                                                            <a href="{{ url('naissance/' . $naissance->id) }}" >
                                                                <button type="button" class="btn btn-primary mb-1">
                                                                    <i class="fa fa-print"></i>
                                                                </button>
                                                            </a>
                                                        @endif
                                                    @endif
                                                    @if (Auth::User()->hasPermission('acte_naissances-update'))
                                                        <a href="{{ url('naissance/' . $naissance->id . '/edit') }}">
                                                            <button type="button" class="btn btn-outline-primary mb-1"
                                                                data-bs-toggle="modal" data-bs-target="#smExample">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </button>
                                                        </a>
                                                    @endif
                                                    @if (Auth::User()->hasPermission('acte_naissances-delete'))
                                                        <button class="btn btn-icon btn-icon-end btn-danger mb-1"
                                                            type="submit">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    @endif
                                                </form>
                                                @if (Auth::User()->hasPermission('acte_naissances-status'))
                                                    <button class="btn btn-primary editbtn" type="submit">Statut</button>
                                                @endif
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

        {{-- STATUT --}}
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editer le statut</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="form-group" action="/valider_acte" method="POST">
                        @csrf
                        <input type="number" class="form-control" id="id" name="id" style="display: none">
                        <div class="mb-3 row">

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">statut
                                </label><br>
                                {{-- <input type="text" id="statut" name="status"> --}}
                                <input type="radio" name="status" value="Approuver">Approuver <br>
                                <input type="radio" name="status" value="Rejeter">Rejeter
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-danger" data-bs-dismiss="modal" value="fermer" />
                            <input type="submit" class="btn btn-primary" value="Editer" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- STATUT --}}


    </main>
@endsection
