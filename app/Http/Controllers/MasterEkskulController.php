<?php

namespace App\Http\Controllers;

use App\Models\MasterEkskul;
use Illuminate\Http\Request;

class MasterEkskulController extends Controller
{
    public function index()
    {
        $ekskulmaster = MasterEkskul::all();
        return view('pages.guru.master-ekskul.index', compact('ekskulmaster'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ekskul' => 'required',
            'kouta' => 'required',
            'day' => 'required',
            'time' => 'required',
            'desc' => 'required',

        ]);
        MasterEkskul::create([
            'name_ekskul' => $request->name_ekskul,
            'kouta' => $request->kouta,
            'mas_kouta' => $request->kouta,
            'day' => $request->day,
            'time' => $request->time,
            'desc' => $request->desc,
        ]);
        return redirect()->route('master-ekskul.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    public function edit($id)
    {
        $edit = MasterEkskul::find($id);
        $ekskulmaster =MasterEkskul::all();

        return view('pages.guru.master-ekskul.index', compact('edit','ekskulmaster'));
    }

    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $admin   = MasterEkskul::find($id);
        $admin->update($input);

        return redirect()->route('master-ekskul.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }
    public function destroy($id)
    {
        $delete = MasterEkskul::find($id);
        $delete->delete();
        return redirect()->route('master-ekskul.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}
