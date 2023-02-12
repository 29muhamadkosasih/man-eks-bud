<?php

namespace App\Http\Controllers;

use App\Models\SeniBudaya;
use Illuminate\Http\Request;
use App\Models\AbsensiEkskul;
use App\Models\AbsensiSenbud;
use App\Models\Ekstrakurikuler;

class SiswaController extends Controller
{
    public function nilaiEkskul()
    {
        $ekskul =Ekstrakurikuler::get();
        $nilaiekskul = AbsensiEkskul::all();
        return view ('pages.murid.nilai-ekskul.index',[
            'nilaiekskul'      =>$nilaiekskul,
            'ekskul'           =>$ekskul,

        ]);
    }
    public function inputSenbud()
    {
        $senbud =SeniBudaya::get();
        $nilaisenbud = AbsensiSenbud::all();
        return view ('pages.murid.nilai-senbud.index',[
            'nilaisenbud'      =>$nilaisenbud,
            'senbud'           =>$senbud,

        ]);
    }
}
