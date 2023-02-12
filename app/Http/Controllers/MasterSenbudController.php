<?php

namespace App\Http\Controllers;

use App\Models\MasterSenbud;
use Illuminate\Http\Request;

class MasterSenbudController extends Controller
{
    public function index()
    {
        $senbudlmaster = MasterSenbud::all();
        return view('pages.guru.master-senbud.index', compact('senbudlmaster'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_senbud' => 'required',
            'kouta' => 'required',
            'day' => 'required',
            'time' => 'required',
            'desc' => 'required',

        ]);
        MasterSenbud::create([
            'name_senbud' => $request->name_senbud,
            'kouta' => $request->kouta,
            'mas_kouta' => $request->kouta,
            'day' => $request->day,
            'time' => $request->time,
            'desc' => $request->desc,
        ]);

        return redirect()->route('master-senbud.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    public function edit($id)
    {
        $edit = MasterSenbud::find($id);
        $senbudlmaster =MasterSenbud::all();

        return view('pages.guru.master-senbud.index', compact('edit','senbudlmaster'));
    }

    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $admin   = MasterSenbud::find($id);
        $admin->update($input);

        return redirect()->route('master-senbud.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }
    public function destroy($id)
    {
        $delete = MasterSenbud::find($id);
        $delete->delete();
        return redirect()->route('master-senbud.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}
