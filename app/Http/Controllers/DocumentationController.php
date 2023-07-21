<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documentation;


class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documentation = Documentation::all();
        return view('documentation.index', compact('documentation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documentation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'titre' => 'required',
            'description' => 'required',
            
        ]);
        $data = $request->all();

        if (!empty($request->file('image'))) {
            $url = $request->file('image')->store('uploads/personne/image' , 'public');
            $image = url('storage/' . $url);
            $data['image'] = $image;
        }    

        Documentation::create($data);
        return redirect('documentation');
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
        $documentation = Documentation::find($id);
        return view('documentation.edit', compact('documentation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'titre' => 'required',
            'description' => 'required',
            
        ]);
        $data = $request->all();
        $documentation = Documentation::find($id);
        $documentation->update($data);

        return redirect('documentation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Documentation::destroy($id);
        return redirect('documeentation');
    }
}
