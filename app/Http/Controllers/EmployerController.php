<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\Employer;
use App\Models\Personne;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employer = Employer::all();
        return view('employer.index', compact('employer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personne = Personne::all();
        $commune = Commune::all();
        return view('employer.create', compact('personne','commune'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'poste' => 'required',
            'date_prise_foncton' => 'required'
        ]);
        $data = $request->all();
        Employer::create($data);
        return redirect('employer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employer = Employer::find($id);
        return view('employer.show', compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personne = Personne::all();
        $commune = Commune::all(); 
        $employer = Employer::find($id);
        return view('employer.edit' , compact('employer', 'personne', 'commune')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'poste' => 'required',
            'date_prise_foncton' => 'required'

        ]);
        $data = $request->all();
        $employer = Employer::find($id);
        $employer->update($data);

        return redirect('employer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employer::destroy($id);
        return redirect('employer');
    }
}
