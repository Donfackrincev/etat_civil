<?php

namespace App\Http\Controllers;
use App\Models\Personne;
use App\Models\Medecin;
use App\Models\Employer;
use App\Models\DeclarationNaissance;

use Illuminate\Http\Request;

class DeclarationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $declaration = DeclarationNaissance::all();
        return view('declaration.index', compact('declaration'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personne = Personne::all();
        $medecin = Medecin::all();
        return view('declaration.create',compact('personne','medecin'));
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'nationaliter' => 'required',
            'lieu_naissance' => 'required',
            'nom_pere' => 'required',
            'nom_mere' => 'required',
            'domicile' => 'required',
            'date' => 'required',
        ]);
        $data = $request->all();
        DeclarationNaissance::create($data);
        return redirect('declaration');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $declaration = DeclarationNaissance::find($id);
        return view('declaration.show', compact('declaration'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personne = Personne::all();
        $medecin = Medecin::all(); 
        $declaration = DeclarationNaissance::find($id);
        return view('declaration.edit', compact('personne','medecin','declaration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'nationaliter' => 'required',
            'lieu_naissance' => 'required',
            'nom_pere' => 'required',
            'nom_mere' => 'required',
            'domicile' => 'required',
            'date' => 'required',

        ]);
        $data = $request->all();
        $declaration = DeclarationNaissance::find($id);
        $declaration->update($data);

        return redirect('declaration');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DeclarationNaissance::destroy($id);
        return redirect('declaration');
    }
}
