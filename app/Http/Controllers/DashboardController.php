<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Fournisseur;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $produits = Produit::count();
        $fournisseur = Fournisseur::count();
        $categorie = Categorie::count();
        $users = User::count();

        return view('dashboard', compact('categorie', 'fournisseur','produits','users'));

    }
}
