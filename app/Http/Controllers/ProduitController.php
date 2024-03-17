<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Fournisseur;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categorie::all();
        $fournisseur = Fournisseur::all();
        $produit = Produit::all();
        return view('produit.index', compact('produit','fournisseur','categorie'));
    }
    public function addTocart($id)
    {

        $produit = Produit::findOrFail($id);

        $cart = session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['Quantite']++;
        }else{

            $cart[$id] = [
                'nom' => $produit->nom,
                'libelle' => $produit->libelle,
                'Quantite' => $produit->Quantite,
                'pritunitaire' => $produit->pritunitaire,
                'prixtotal' => $produit->prixtotal,
                'image' => $produit->image,


            ];

        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success','ajouter au panier avec succes ');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie = Categorie::all();
        $fournisseur = Fournisseur::all();
        return view('produit.create', compact('fournisseur','categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'nom' => 'required',
            'libelle' => 'required',
            'Quantite' => 'required',
            'pritunitaire' => 'required',
            'prixtotal' => 'required',

        ]);

        $data = $request->all();

        if (!empty($request->file('image'))) {
            $url = $request->file('image')->store('uploads/users/image' , 'public');
            $image = url('storage/' . $url);
            $data['image'] = $image;
        }
        Produit::create($data);
        return redirect('produit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produit = Produit::find($id);
        return view('produit.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produit::destroy($id);
        return redirect('produit');
    }
}
