<?php

namespace App\Http\Controllers;

use App\Models\SeniBudaya;
use Illuminate\Http\Request;
use App\Models\AbsensiSenbud;

class AbsensiSenbudController extends Controller
{
    public function index()
    {
        $dataabsensenbud =AbsensiSenbud::all();
        $senbud =SeniBudaya::get();
        return view('pages.murid.absensi.senbud.index', [
            'senbud'   => $senbud,
            'dataabsensenbud'   => $dataabsensenbud,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis_id' => 'required',
        ]);

        AbsensiSenbud::create($request->all());

        return redirect()->route('absensi-senbud.index')
                        ->with('success','Berhasil Menyimpan !');
    }
}
