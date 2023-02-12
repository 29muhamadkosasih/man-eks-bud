<?php

namespace App\Http\Controllers;

use App\Models\MasterRayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function index()
    {
        $datarayon = MasterRayon::all();
        return view('pages.guru.master-rayon.index', compact('datarayon'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_rayon' => 'required',
            'pembimbing' => 'required',

        ]);

        MasterRayon::create($request->all());

        return redirect()->route('master-rayonnn.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    public function edit($id)
    {
        $edit = MasterRayon::find($id);
        $datarayon =MasterRayon::all();

        return view('pages.guru.master-rayon.index', compact('edit','datarayon'));
    }

    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $admin   = MasterRayon::find($id);
        // dd($id);
        $admin->update($input);

        return redirect()->route('master-rayonnn.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    public function destroy($id)
    {
        $delete = MasterRayon::find($id);
        $delete->delete();
        return redirect()->route('master-rayonnn.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }


}
