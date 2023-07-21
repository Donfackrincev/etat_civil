<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use App\Models\Region;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departement = Departement::all();
        return view('departement.index', compact('departement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $region = Region::all();
        
        return view('departement.create', compact('region'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $this->validate($request,[
            'nom_pays' => 'required',
            'nom_departement' => 'required',

        ]);
        $data = $request->all();
        Departement::create($data);
        return redirect('departement');
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
        //
    }
}
