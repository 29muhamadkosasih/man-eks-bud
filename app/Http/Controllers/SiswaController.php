<?php

namespace App\Http\Controllers;

use App\Models\SeniBudaya;
use Illuminate\Http\Request;
use App\Models\AbsensiEkskul;
use App\Models\AbsensiSenbud;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    public function nilaiEkskul()
    {
        $name =Session::get('name');

        $ekskul =Ekstrakurikuler::get();
        $nilaiekskul = AbsensiEkskul::where('name', $name)->get();
        return view ('pages.murid.nilai-ekskul.index',[
            'nilaiekskul'      =>$nilaiekskul,
            'ekskul'           =>$ekskul,

        ]);
    }
    public function inputSenbud()
    {
        $name =Session::get('name');

        $senbud =SeniBudaya::get();
        $nilaisenbud = AbsensiSenbud::where('name', $name)->get();
        return view ('pages.murid.nilai-senbud.index',[
            'nilaisenbud'      =>$nilaisenbud,
            'senbud'           =>$senbud,

        ]);
    }
}
