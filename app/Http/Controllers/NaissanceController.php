<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActeNaissance;
use App\Models\DeclarationNaissance;
use App\Models\Employer;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Medecin;
use App\Models\Personne;
use App\Models\Region;
use App\Notifications\ActeNaissance as NotificationsActeNaissance;
use App\Notifications\ActeRejet;
use App\Notifications\ActeValidation;
use App\Notifications\NaissanceActe;

class NaissanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $declaration = DeclarationNaissance::all();
        $employer = Employer::all();
        $commune = Commune::all();
        $region = Region::all();
        $departement = Departement::all();
        $naissance = ActeNaissance::all();
        return view('naissance.index', compact('naissance'
    ,'declaration','employer','commune','region',
'departement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $declaration = DeclarationNaissance::all();
        $employer = Employer::all();
        $commune = Commune::all();
        $region = Region::all();
        $departement = Departement::all();

        return view('naissance.create', compact('declaration', 'employer', 'commune', 'region','departement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_enfant' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'nom_enfant1' => 'required',
            'sexe' => 'required',
            'nom_pere' => 'required',
            'lieu_naissance_pere' => 'required',
            'naissance_pere' => 'required',
            'domicile' => 'required',
            'profession_pere' => 'required',
            'nom_mere' => 'required',
            'lieu_naissance_mere' => 'required',
            'naissance_mere' => 'required',
            'Domiciliere_mere' => 'required',
            'profession_mere' => 'required',
            'dresser_le' => 'required',
            'assistant_officier' => 'required',
            'email' => 'required',
            'status' => 'required',
            'declaration_naissance_id'=>'required',
            'employer_id'=>'required',
            'commune_id'=>'required',
            'region_id'=>'required',
            'departement_id'=>'required',

        ]);
        $naissance = new ActeNaissance();
        $naissance->nom_enfant = $request->nom_enfant;
        $naissance->date_naissance = $request->date_naissance;
        $naissance->lieu_naissance = $request->lieu_naissance;
        $naissance->nom_enfant1 = $request->nom_enfant1;
        $naissance->sexe = $request->sexe;
        $naissance->nom_pere = $request->nom_pere;
        $naissance->lieu_naissance_pere = $request->lieu_naissance_pere;
        $naissance->naissance_pere = $request->naissance_pere;
        $naissance->domicile = $request->domicile;
        $naissance->profession_pere = $request->profession_pere;
        $naissance->nom_mere = $request->nom_mere;
        $naissance->lieu_naissance_mere = $request->lieu_naissance_mere;
        $naissance->naissance_mere = $request->naissance_mere;
        $naissance->Domiciliere_mere = $request->Domiciliere_mere;
        $naissance->profession_mere = $request->profession_mere;
        $naissance->profession_mere = $request->profession_mere;
        $naissance->dresser_le = $request->dresser_le;
        $naissance->assistant_officier = $request->assistant_officier;
        $naissance->email = $request->email;
        $naissance->status = $request->status;
        $naissance->declaration_naissance_id = $request->declaration_naissance_id;
        $naissance->employer_id = $request->employer_id;
        $naissance->commune_id = $request->commune_id;
        $naissance->region_id = $request->region_id;
        $naissance->departement_id = $request->departement_id;

        $naissance->save();
        if ($naissance) {
            $naissance->notify(new NaissanceActe);
        }

        return redirect('naissance ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $declaration = DeclarationNaissance::all();
        $medecin = Medecin::all();
        $personne = Personne::all();
        $employer = Employer::all();
        $commune = Commune::all();
        $region = Region::all();
        $naissance = ActeNaissance::find($id);
        return view('naissance.show', compact('declaration', 'employer', 'commune', 'naissance', 'region'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $declaration = DeclarationNaissance::all();
        $employer = Employer::all();
        $commune = Commune::all();
        $region = Region::all();
        $naissance = ActeNaissance::find($id);
        return view('naissance.edit', compact('declaration', 'employer', 'commune', 'naissance', 'region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nom_enfant' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'nom_enfant1' => 'required',
            'sexe' => 'required',
            'nom_pere' => 'required',
            'lieu_naissance_pere' => 'required',
            'naissance_pere' => 'required',
            'domicile' => 'required',
            'profession_pere' => 'required',
            'nom_mere' => 'required',
            'lieu_naissance_mere' => 'required',
            'naissance_mere' => 'required',
            'Domiciliere_mere' => 'required',
            'profession_mere' => 'required',
            'dresser_le' => 'required',
            'assistant_officier' => 'required',
            'email' => 'required',
            'status' => 'required',

        ]);
        $data = $request->all();
        $naissance = ActeNaissance::find($id);
        $naissance->update($data);

        return redirect('naissance');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Personne::destroy($id);
        return redirect('naissance');
    }

    public function valider_acte(Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $naissance = ActeNaissance::find($request->id);
        $naissance->status = $request->status;

        $naissance->update();

        $naiss = ActeNaissance::where('status', 'Approuver', array())->get();
        if ($naiss = "Approuver") {
            $naissance->notify(new ActeValidation);
        } else {
            $naissance->notify(new ActeRejet);
        }


        return redirect('/naissance')->with('status', 'vous avez modifier avec succès le statut de la demande !');
    }
}
