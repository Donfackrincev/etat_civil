@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title-container">
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <h1 class="mb-0 pb-0 display-4" id="title">Liste des declarations</h1>
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
                                {{-- <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal"
                                    data-bs-target="#nExample">Ajouter la declaration
                                </button> --}}


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
                            <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                                <div class="d-inline-block me-0 me-sm-3 float-start float-md-none">
                                    <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow add-datatable"
                                        data-bs-delay="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Add"
                                        type="button">
                                        <i data-acorn-icon="plus"></i>
                                    </button>
                                    <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow edit-datatable disabled"
                                        data-bs-delay="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
                                        type="button">
                                        <i data-acorn-icon="edit"></i>
                                    </button>
                                    <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow disabled delete-datatable"
                                        data-bs-delay="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                        type="button">
                                        <i data-acorn-icon="bin"></i>
                                    </button>
                                </div>
                                <div class="d-inline-block">
                                    <button
                                        class="btn btn-icon btn-icon-only btn-foreground-alternate shadow datatable-print"
                                        data-bs-delay="0" data-datatable="#datatableRowsServerSide" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Print" type="button">
                                        <i data-acorn-icon="print"></i>
                                    </button>
                                    <div class="d-inline-block datatable-export" data-datatable="#datatableRowsServerSide">
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
                                        <th class="text-muted text-small text-uppercase">Nom</th>
                                        <th class="text-muted text-small text-uppercase">Prenom</th>
                                        <th class="text-muted text-small text-uppercase">sexe</th>
                                        <th class="text-muted text-small text-uppercase">nationaliter</th>
                                        <th class="text-muted text-small text-uppercase">lieu_naissance</th>
                                        <th class="text-muted text-small text-uppercase">date_naissance</th>
                                        <th class="text-muted text-small text-uppercase">Action</th>
                                        <th class="empty">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($declaration as $declaration)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $declaration->nom }}</td>
                                            <td>{{ $declaration->prenom }}</td>
                                            <td>{{ $declaration->sexe }}</td>
                                            <td>{{ $declaration->nationaliter }}</td>
                                            <td>{{ $declaration->lieu_naissance }}</td>
                                            <td>{{ $declaration->date }}</td>
                                            <td>

                                                <form method="POST"
                                                    action="{{ url('/declaration/delete/' . $declaration->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    @csrf

                                                    <a href="{{ url('declaration/' . $declaration->id) }}">
                                                        <button class="btn btn-info mb-1" type="button"> <i
                                                                class="fa fa-eye"></i></button>
                                                    </a>

                                                    <a href="{{ url('declaration/' . $declaration->id . '/edit') }}">
                                                        <button type="button" class="btn btn-secondary mb-1"> <i
                                                                class="fa fa-pencil-square-o"></i> </button>
                                                    </a>
                                                    <button class="btn btn-icon btn-icon-end btn-danger mb-1"
                                                        type="submit"
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
                    <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog"
                        aria-labelledby="modalTitle" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle">Ajouter une declaration</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form method="POST" action="{{ url('declaration') }}" id="validationTopLabel"
                                        class="tooltip-end-top" novalidate="novalidate">
                                        @csrf

                                        <label class="mb-3 top-label">
                                            <input class="form-control" type="text" name="nom" required="">
                                            <span>Nom</span>
                                        </label>

                                        <label class="mb-3 top-label">
                                            <input class="form-control" type="text" name="prenom" required="">
                                            <span>Prenom</span>
                                        </label>

                                        <select class="form-select" id="specificSizeSelect" name="sexe">
                                            <option selected="selected">Selectionner le sexe</option>
                                            <option value="Masculin">Masculin</option>
                                            <option value="Feminin">Feminin</option>
                                        </select> <br>

                                        <label class="mb-3 top-label">
                                            <input class="form-control" type="text" name="nationaliter"
                                                required="">
                                            <span>Nationaliter</span>
                                        </label>

                                        <label class="mb-3 top-label">
                                            <input class="form-control" type="text" name="lieu_naissance"
                                                required="">
                                            <span>Lieu de naissance</span>
                                        </label>

                                        <label class="mb-3 top-label">
                                            <input class="form-control" type="text" name="nom_pere" required="">
                                            <span>Nom du pere</span>
                                        </label>

                                        <label class="mb-3 top-label">
                                            <input class="form-control" type="text" name="nom_mere" required="">
                                            <span>Nom de la mere</span>
                                        </label>

                                        <label class="mb-3 top-label">
                                            <input class="form-control" type="text" name="domicile" required="">
                                            <span>Domicil</span>
                                        </label>

                                        <label class="mb-3 top-label">
                                            <input class="form-control" type="date" id="date_naissance"
                                                name="date" required="" onchange="calcul()">
                                            <span>date naissance</span>
                                        </label>


                                        <script>
                                            function calcul() {

                                                let date = document.getElementById('date_naissance').value;
                                                let d1 = new Date(date);
                                                let d2 = new Date();
                                                var temoinage = document.getElementById('temoinage');
                                                var medecin = document.getElementById('medecin');

                                                diffTime = d2.getTime() - d1.getTime();
                                                diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));


                                                console.log(date);
                                                console.log(d1);
                                                console.log(d2);
                                                console.log(diffTime);
                                                console.log(diffDays);

                                                if (diffDays < 30) {
                                                    medecin.disabled = false;
                                                    temoinage.disabled = true;

                                                } else {
                                                    medecin.disabled = true;
                                                    temoinage.disabled = false;
                                                }

                                            }
                                        </script>


                                        <select class="form-select" id="medecin" name="medecin_id">
                                            <option selected="selected">Selectionner la medecin</option>
                                            @foreach ($medecin as $medecin)
                                                <option value="{{ $medecin->id }}">{{ $medecin->nom }}
                                                </option>
                                            @endforeach
                                        </select> <br>

                                        {{-- <input type="text" id="searchInput" placeholder="recherche">
                        <div id="searchResults"></div> --}}
                                        <script>
                                            document.getElementById('searchInput').addEventListener('keyup', function() {
                                                var keyword = this.value;
                                                fetch('/search? keyword =' + keyword).then(response => response.json()).then(data => {
                                                    var resultsContainer = document.getElementById('searchResults');
                                                    resultsContainer.innerHTML = '';

                                                    data.forEach(result => {
                                                        var resultElement = document.createElement.textContent = result.medecin_id;
                                                        resultsContainer.appendChild(resultElement);
                                                    })
                                                })
                                            })
                                        </script>

                                        <select class="form-select" id="temoinage" name="temoinage_id">
                                            <option selected="selected">Selectionner le temoin</option>
                                            @foreach ($temoinage as $temoinage)
                                                <option value="{{ $temoinage->id }}">{{ $temoinage->personne->nom }}
                                                </option>
                                            @endforeach
                                        </select> <br>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-primary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary"
                                                id="addEditConfirmButton">Add</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
