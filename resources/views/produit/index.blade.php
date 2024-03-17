@extends('layouts.app')
@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un produit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" {{ url('produit') }} enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" placeholder="entrer le nom" name="nom"
                                    required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="text" class="form-control " placeholder="Entrer le libelle" name="libelle"
                                    required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="file" class="form-control " placeholder="entrer l'image" name="image"
                                    required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" placeholder="Entrer la Quantite" name="Quantite"
                                    id="Quantity" onchange="prix_total()" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" placeholder="Entrer le prix unitaire"
                                    name="pritunitaire" id="UnitPrice"  onchange="prix_total()" required>
                            </div>

                            <script>
                                function prix_total() {
                                    let a= document.getElementById('Quantity').value;
                                    let b= document.getElementById('UnitPrice').value;
                                    let c= document.getElementById('prixtotal');

                                    if (a != NaN && b != NaN) {
                                        c.value = a * b;
                                    }

                                }
                            </script>


                            <div class="col-md-12 mb-3">
                                <input type="number" class="form-control" placeholder="Entrer le prixtotal"
                                    name="prixtotal"    id="prixtotal"   required>
                            </div>




                            <div class="form-group">
                                <select class="form-control" id="exampleFormControl2" name="fournisseur_id">
                                    <option>Selectionner le fournisseur</option>
                                    @foreach ($fournisseur as $fournisseur)
                                        <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="exampleFormControl2" name="categorie_id">
                                    <option>Selectionner la categorie</option>
                                    @foreach ($categorie as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->type }} </option>
                                    @endforeach
                                </select>
                            </div>





                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-pill" >Ajouter</button>
                </div>
            </form>
            </div>
        </div>
    </div>


    <h2 style="margin-top: 30px">Liste des produits</h2>

    <table id="productsTable" class="table table-hover table-product" style="width:100%;margin-top: 40px">


        <thead>
            <div style="margin-left: 80%; margin-top:30px">
                <button type="button" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#exampleModal">
                    <i class="mdi mdi-plus"></i>add
                </button>

            </div>

            <tr>

                <th>Image</th>
                <th>Nom</th>
                <th>Quantite</th>
                <th>pritunitaire</th>
                <th>Fournisseur</th>
                <th>Categori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($produit as $produit)
                <tr>
                    <td class="py-0">
                        <img src="{{ $produit->image }}" alt="Product Image">
                      </td>
                    <td> {{ $produit->nom }}</td>
                    <td> {{ $produit->Quantite }}</td>
                    <td> {{ $produit->pritunitaire }}</td>
                    <td> {{ $produit->fournisseur->nom }}</td>
                    <td> {{ $produit->categorie->type }}</td>

                    <td>
                        <form method="POST" action="{{ url('/produit/delete/' . $produit->id) }}">
                            {{ method_field('DELETE') }}
                            @csrf

                            <a href="{{ url('produit/' . $produit->id) }}">
                                <button type="button" class="btn btn-info btn-pill">
                                    <i class="mdi mdi-eye"></i>
                                </button>
                            </a>

                            <a href="{{ url('produit/' . $produit->id . '/edit') }}">
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
