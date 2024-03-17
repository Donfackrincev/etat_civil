@extends('layouts.app')
@section('content')


    {{-- modal d'ajout --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un categorie</h5>
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

                    <form method="POST" action="{{ url('categorie') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control rounded-0" id="exampleFormControlInput4"
                                placeholder="Enter le type" name="type">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control rounded-0" id="exampleFormControlInput4"
                                placeholder="Enter la description" name="description">
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control rounded-0" id="exampleFormControlPasswor3"
                                placeholder="Telephone" name="numero">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-pill">Enregistrer</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <h2 style="margin-top: 30px">Liste des categories</h2>

    <table id="productsTable" class="table table-hover table-product" style="width:100%;margin-top: 40px">
        <div style="margin-left: 20px">
            <button type="button" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#exampleModal">
                <i class="mdi mdi-plus">add</i>
            </button>

        </div>

        <thead>

            <tr>

                <th>Type</th>
                <th>Description</th>
                <th>numero</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categorie as $categorie)
                <tr>
                    <td> {{ $categorie->type }}</td>
                    <td> {{ $categorie->description }}</td>
                    <td> {{ $categorie->numero }}</td>
                    

                    <td>
                        <form method="POST" action="{{ url('/categorie/delete/' . $categorie->id) }}">
                            {{ method_field('DELETE') }}
                            @csrf

                            <a href="{{ url('categorie/' . $categorie->id . '/edit') }}">
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
