<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsensiEkskul;
use App\Models\Ekstrakurikuler;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class AbsensiController extends Controller
{
    public function index()
    {
        $dataabsen =AbsensiEkskul::all();
        $ekskul =Ekstrakurikuler::get();
        return view('pages.murid.absensi.index', [
            'ekskul'   => $ekskul,
            'dataabsen'   => $dataabsen,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis_id' => 'required',
        ]);

        AbsensiEkskul::create($request->all());

        return redirect()->route('absensi.index')
                        ->with('success','Berhasil Menyimpan !');
    }
}
