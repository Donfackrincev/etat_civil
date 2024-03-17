@extends('layouts.app')
@section('content')
    <form style="margin-top: 30px" method="POST" {{ url('produit') }}>
        @csrf
        <p>AJOUTER UN PRODUIT</p>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <input type="text" class="form-control" placeholder="entrer le nom" name="nom" required>
            </div>

            <div class="col-md-12 mb-3">
                <input type="text" class="form-control " placeholder="Entrer le libelle" name="libelle" required>
            </div>

            <div class="col-md-12 mb-3">
                <input type="file" class="form-control " placeholder="entrer l'image" name="image" required>
            </div>

            <div class="col-md-12 mb-3">
                <input type="number" class="form-control" placeholder="Entrer la Quantite" name="Quantite" id="Quantity"
                    onchange="prix_total()" required>
            </div>

            <div class="col-md-12 mb-3">
                <input type="number" class="form-control" placeholder="Entrer le prix unitaire" name="pritunitaire"
                    required>
            </div>

            <script>
                function prix_total() {
                    let a = document.getElementById('Quantity').value;
                    let b = document.getElementById('UnitPrice').value;
                    let c = document.getElementById('TotalPrice');

                    if (a != NaN && b != NaN) {
                        c.value = a * b;
                    }

                }
            </script>

            <div class="col-md-12 mb-3">
                <input type="number" class="form-control" placeholder="Entrer le prixtotal" name="prixtotal" required>
            </div>




            <div class="form-group">
                <select  class="form-control" id="exampleFormControl2" name="fournisseur_id">
                    <option>Selectionner le fournisseur</option>
                    @foreach ($fournisseur as $fournisseur)
                        <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select  class="form-control" id="exampleFormControl2" name="categorie_id">
                    <option>Selectionner la categorie</option>
                    @foreach ($categorie as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->type }} </option>
                    @endforeach
                </select>
            </div>





        </div>
        <button class="btn btn-primary btn-pill mr-2" type="submit" style="margin-left: 850px">Submit</button>
    </form>
@endsection
