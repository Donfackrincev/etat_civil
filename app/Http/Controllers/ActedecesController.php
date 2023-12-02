<?php

namespace App\Http\Controllers;

use App\Models\ActeDeces;
use App\Models\DeclarationDeces;
use App\Models\Employer;
use Illuminate\Http\Request;

class ActedecesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deces = ActeDeces::all();
        $employer = Employer::all();
        $declarationdeces = DeclarationDeces::all();
        return view('deces.index', compact('deces','declarationdeces','employer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employer = Employer::all();
        $declarationdeces = DeclarationDeces::all();
        return view('deces.create', compact('employer','declarationdeces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom_decedes' => 'required',
            'lieu_deces' => 'required',
            'age_decedes' => 'required',
            'domicile_decedes' => 'required',
            'nom_pere' => 'required',
            'demeur_pere' => 'required',
            'nom_mere' => 'required',
            'demeur_mere' => 'required',
            'date_fabrication' => 'required',
        ]);
        $data = $request->all();
        ActeDeces::create($data);
        return redirect('deces');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $declarationdeces = DeclarationDeces::all();
        $employer = Employer::all();
        $deces =ActeDeces::find($id);
        return view('deces.show', compact('deces','employer','declarationdeces'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $declarationdeces = DeclarationDeces::all();
        $employer = Employer::all();
        $deces =ActeDeces::find($id);
        return view('deces.edit', compact('deces','employer','declarationdeces'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nom_decedes' => 'required',
            'lieu_deces' => 'required',
            'age_decedes' => 'required',
            'domicile_decedes' => 'required',
            'nom_pere' => 'required',
            'demeur_pere' => 'required',
            'nom_mere' => 'required',
            'demeur_mere' => 'required',
            'date_fabrication' => 'required',
        ]);
        $data = $request->all();
        $deces = ActeDeces::find($id);
        $deces->update($data);

        return redirect('deces');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ActeDeces::destroy($id);
        return redirect('deces');
    }
}
