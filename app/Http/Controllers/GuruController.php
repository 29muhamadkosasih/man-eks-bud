<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view("pages.guru.index");
    }

    public function laporan()
    {
        return view('pages.admin.laporan.index');
    }
}
