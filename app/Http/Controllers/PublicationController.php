<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employer = Employer::all();
        $publication = Publication::all();
        return view('publication.index', compact('publication','employer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employer = Employer::all();
        return view('publication.create', compact('employer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'num_publication' => 'required',
            'num_borderau' =>'required',
            'date_publication'=>'required',
            'montant_verser' =>'required'
        ]);
        $data = $request->all();
        Publication::create($data);
        return redirect('publication');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $publication = Publication::find($id);
        return view('publication.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employer = Employer::all();
        $publication = Publication::find($id);
        return view('publication.edit', compact('publication', 'employer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'num_publication' => 'required',
            'num_borderau' =>'required',
            'date_publication'=>'required',
            'montant_verser' =>'required'
        ]);
        $data = $request->all();
        $publication = Publication::find($id);
        $publication->update($data);

        return redirect('publication');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Publication::destroy($id);
        return redirect('publication');
    }
}
