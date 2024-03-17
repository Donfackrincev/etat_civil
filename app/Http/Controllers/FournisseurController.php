<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fournisseur = Fournisseur::all();
        return view('fournisseur.index', compact('fournisseur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fournisseur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'email' => 'required',
            'numero' => 'required',
            'pays' => 'required',
            'ville' => 'required',

        ]);

        $data = $request->all();

        Fournisseur::create($data);
        return redirect('fournisseur');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('fournisseur.edit', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nom' => 'required',
            'email' => 'required',
            'numero' => 'required',
            'pays' => 'required',
            'ville' => 'required',

        ]);

        $data = $request->all();
        $fournisseur = Fournisseur::find($id);
        $fournisseur->update($data);

        return redirect('fournisseur');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fournisseur::destroy($id);
        return redirect('fournisseur');
    }
}
