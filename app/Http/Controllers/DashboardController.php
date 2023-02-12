<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\MasterEkskul;
use App\Models\MasterSenbud;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $dataadmin = Admin::all();
        return view('pages.admin.dashboard.index',[
            'dataadmin'   => $dataadmin
        ]);
    }

    public function dashboardStudent()
    {
        $ekskulmaster = MasterEkskul::all();
        $senbudmaster = MasterSenbud::all();
        return view('pages.murid.dashboard.index', compact('ekskulmaster', 'senbudmaster'));
    }

    public function dashboardTeacher()
    {
        return view('pages.guru.dashboard.index');
    }
}
