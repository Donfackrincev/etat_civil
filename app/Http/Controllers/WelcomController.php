<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function index(){
        $produit = Produit::all();

        return view('welcome', compact('produit'));

    }
}
