<?php

namespace App\Http\Controllers;

use App\Models\SeniBudaya;
use Illuminate\Http\Request;
use App\Models\AbsensiSenbud;
use Illuminate\Support\Facades\Session;

class AbsensiSenbudController extends Controller
{
    public function index()
    {
        $id =Session::get('id');
        $name =Session::get('name');
        $username =Session::get('username');

        $dataabsensenbud =AbsensiSenbud::where('name', $name)->get();
        $senbud =SeniBudaya::where('name', $name)->get();
        return view('pages.murid.absensi.senbud.index', [
            'senbud'   => $senbud,
            'dataabsensenbud'   => $dataabsensenbud,
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

        AbsensiSenbud::create($request->all());

        return redirect()->route('absensi-senbud.index')
                        ->with('success','Berhasil Menyimpan !');
    }
}
