<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\Departement;
use App\Models\User;
use App\Notifications\sendParentRegistrationNotification;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departement = Departement::all();
        $commune = Commune::all();
        return view('commune.index', compact('commune', 'departement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departement = Departement::all();
        $commune = Commune::all();
        return view('commune.create', compact('commune', 'departement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom_commune' => 'required',
            'ville' => 'required',
            'arrondissement' => 'required',
            'numero' => 'required',
            'email' => 'required'

        ]);
        $data = $request->all();
        Commune::create($data);
        // if ($request) {
        //     $request->notify(new sendParentRegistrationNotification());
        // }

        return redirect('commune')->with('status', 'Commune ajouter avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commune = Commune::find($id);
        return view('commune.show', compact('commune'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departement = Departement::all();
        $commune = Commune::find($id);
        return view('commune.edit', compact('commune', 'departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nom_commune' => 'required',
            'ville'  => 'required',
            'arrondissement'  => 'required',
            'numero'  => 'required',
            'email'  => 'required',
        ]);
        $data = $request->all();
        $commune = Commune::find($id);
        $commune->update($data);

        return redirect('commune');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Commune::destroy($id);
        return redirect('commune');
    }
}
