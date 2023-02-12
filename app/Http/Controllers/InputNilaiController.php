<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsensiEkskul;
use App\Models\Ekstrakurikuler;

class InputNilaiController extends Controller
{
    public function index()
    {
        $ekskul =Ekstrakurikuler::get();
        $inputnilai = AbsensiEkskul::all();
        return view('pages.guru.input-nilai.index',[
            'inputnilai'    =>$inputnilai,
            'ekskul'    =>$ekskul,
        ]);
    }

    public function edit($id)
    {
        $edit = AbsensiEkskul::find($id);

        return view('pages.guru.input-nilai.edit', compact('edit'));
    }

    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $admin   = AbsensiEkskul::find($id);
        // dd($id);
        $admin->update($input);

        return redirect()->route('input-nilai.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

}
