<?php

namespace App\Http\Controllers;
use App\Models\Temoinage;
use App\Models\Personne;
use App\Models\DeclarationNaissance;

use Illuminate\Http\Request;

class TemoinageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temoinage = Temoinage::all();
        return view('temoinage.index', compact('temoinage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $declaration = DeclarationNaissance::all();
        $personne = Personne::all();
        return view('temoinage.create', compact('declaration','personne'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'civiliter' => 'required',
           
        ]);
        $data = $request->all();

        if (!empty($request->file('photo_cni'))) {
            $url = $request->file('photo_cni')->store('uploads/temoinage/photo_cni' , 'public');
            $photo_cni = url('storage/' . $url);
            $data['photo_cni'] = $photo_cni;
        }    
        Temoinage::create($data);
        return redirect('temoinage');
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
