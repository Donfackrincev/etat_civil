@extends('layouts.app')
@section('content')


    {{-- modal d'ajout --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un fournisseur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ url('fournisseur') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control rounded-0" id="exampleFormControlInput4"
                                placeholder="Enter le nom" name="nom">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control rounded-0" id="exampleFormControlInput4"
                                placeholder="Enter Email" name="email">
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control rounded-0" id="exampleFormControlPasswor3"
                                placeholder="Telephone" name="numero">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control rounded-0" id="exampleFormControlPasswor3"
                                placeholder="Telephone" name="pays">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control rounded-0" id="exampleFormControlPasswor3"
                                placeholder="Telephone" name="ville">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-pill">Enregistrer</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <h2 style="margin-top: 30px">Liste des fournisseurs</h2>

    <table id="productsTable" class="table table-hover table-product" style="width:100%;margin-top: 40px">
        <div style="margin-left: 20px">
            <button type="button" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-plus">add</i>
            </button>

        </div>

        <thead>

            <tr>

                <th>Nom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>ville</th>
                <th>Pays</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($fournisseur as $fournisseur)
                <tr>
                    <td> {{ $fournisseur->nom }}</td>
                    <td> {{ $fournisseur->email }}</td>
                    <td> {{ $fournisseur->numero }}</td>
                    <td> {{ $fournisseur->pays }}</td>
                    <td> {{ $fournisseur->ville }}</td>

                    <td>
                        <form method="POST" action="{{ url('/fournisseur/delete/' . $fournisseur->id) }}">
                            {{ method_field('DELETE') }}
                            @csrf

                            <a href="{{ url('fournisseur/' . $fournisseur->id . '/edit') }}">
                                <button type="button" class="btn btn-info btn-pill">
                                    <i class="mdi mdi-pencil"></i>
                                </button>
                            </a>

                            <button type="submit" class="btn btn-danger btn-pill">
                                <i class="mdi mdi-delete"></i>
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
