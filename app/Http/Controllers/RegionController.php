<?php

namespace App\Http\Controllers;
use App\Models\Region;

use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $region = Region::all();
        return view('region.index', compact('region'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $region = Region::all();

        return view('region.create', compact('region'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store ( Request $request )
    {
        $this->validate($request,[
            'nom_region' => 'required',
            'nom_pays' => 'required',
            'chef_lieu' => 'required',

        ]);
        $data = $request->all();
        Region::create($data);

        // if($data){
        //     foreach ($data as $data) {
        //         $data->notify(new RegionNotification());
        //     }
        // }
        return redirect('region');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $region = Region::find($id);
        return view('region.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $region = Region::find($id);
        return view('region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nom_region' => 'required',
            'nom_pays' => 'required',
            'chef_lieu' => 'required',

        ]);
        $data = $request->all();
          $region = Region::find($id);
          $region->update($data);

          return redirect('region');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Region::destroy($id);
        return redirect('region');
    }
}
