<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsensiEkskul;
use App\Models\Ekstrakurikuler;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class AbsensiController extends Controller
{
    public function index()
    {
        $id =Session::get('id');
        $name =Session::get('name');
        $username =Session::get('username');

        // dd($id);

        $dataabsen =AbsensiEkskul::where('name', $name)->get();
        $ekskul =Ekstrakurikuler::where('name', $name)->get();
        // dd($dataabsen);
        return view('pages.murid.absensi.index', [
            'ekskul'   => $ekskul,
            'dataabsen'   => $dataabsen,
            'id'   => $id,
            'name'   => $name,
            'username'   => $username,
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
