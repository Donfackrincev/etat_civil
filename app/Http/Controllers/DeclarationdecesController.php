<?php

namespace App\Http\Controllers;

use App\Models\DeclarationDeces;
use App\Models\Medecin;
use App\Models\Personne;
use Illuminate\Http\Request;

class DeclarationdecesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personne = Personne::all();
        $medecin = Medecin::all();
        $declarationdeces = DeclarationDeces::all();
        return view('declarationdeces.index', compact('declarationdeces','personne','medecin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('declarationdeces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom_deces' => 'required',
            'domicile' => 'required',
            'date_deces' => 'required',
            'motif_deces' => 'required',
            'lieu_deces' => 'required',
        ]);
        $data = $request->all();
        DeclarationDeces::create($data);
        return redirect('declarationdeces');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medecin = Medecin::all();
        $personne = Personne::all();
        $declarationdeces = DeclarationDeces::find($id);
        return view('declarationdeces.show', compact('declarationdeces','personne','medecin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medecin = Medecin::all();
        $personne = Personne::all();
        $declarationdeces = DeclarationDeces::find($id);
        return view('declarationdeces.edit', compact('declarationdeces','personne','medecin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nom_deces' => 'required',
            'domicile' => 'required',
            'date_deces' => 'required',
            'motif_deces' => 'required',
            'lieu_deces' => 'required',
        ]);
        $data = $request->all();
        $region = DeclarationDeces::find($id);
        $region->update($data);

        return redirect('declarationdeces');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DeclarationDeces::destroy($id);
        return redirect('declarationdeces');
    }
}
