<?php

namespace App\Http\Controllers;
use App\Models\Medecin;
use App\Models\Personne;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medecin = Medecin::all();
        return view('medecin.index', compact('medecin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personne = Personne::all();
        return view('medecin.create', compact('personne'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom_centre' => 'required',
            'fontion' => 'required'
        ]);
        $data = $request->all();
        Medecin::create($data);
        return redirect('medecin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medecin = Medecin::find($id);
        return view('medecin.show', compact('medecin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personne = Personne::all();
        $medecin = Medecin::find($id);
        return view('medecin.edit' , compact('medecin', 'personne')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nom_centre' => 'required',
            'fontion' => 'required'

        ]);
        $data = $request->all();
        $medecin = Medecin::find($id);
        $medecin->update($data);

        return redirect('medecin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Medecin::destroy($id);
        return redirect('medecin');
    }
}
