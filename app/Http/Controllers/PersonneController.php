<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personne = Personne::all();
        return view('personne.index', compact('personne'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personne.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'prenom' => 'required',
            'numero',
            'email',
            'domicile',
            'cni' ,
            'nationaliter' => 'required',
            'profession',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'nom_pere' => 'required',
            'nom_mere' => 'required',
            'sexe' => 'required',
        ]);
        $data = $request->all();

        if (!empty($request->file('photo'))) {
            $url = $request->file('photo')->store('uploads/personne/photo' , 'public');
            $photo = url('storage/' . $url);
            $data['photo'] = $photo;
        }    
        Personne::create($data);
        return redirect('personne');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $personne = Personne::find($id);
        return view('personne.show', compact('personne'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personne = Personne::find($id);
        return view('personne.edit', compact('personne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nom' => 'required',
            'prenom' => 'required',
            'numero' => 'required',
            'email' => 'required',
            'domicile' => 'required',
            'cni' => 'required',
            'nationaliter' => 'required',
            'profession' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'nom_pere' => 'required',
            'nom_mere' => 'required',
            'photo' => 'required',
        ]);
        $data = $request->all();
        $personne = Personne::find($id);
        $personne->update($data);

        return redirect('personne');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Personne::destroy($id);
        return redirect('personne');
    }
}
