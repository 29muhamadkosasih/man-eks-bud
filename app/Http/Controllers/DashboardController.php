<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\MasterRayon;
use App\Models\MasterEkskul;
use App\Models\MasterRombel;
use App\Models\MasterSenbud;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $dataadmin = Admin::all();
        $total =Admin::all()->count();
        $admin =Admin::where('role', 'admin')->count();
        $murid =Admin::where('role', 'murid')->count();
        $guru =Admin::where('role', 'guru')->count();
        // dd($guru);
        return view('pages.admin.dashboard.index',[
            'dataadmin'   => $dataadmin,
            'admin'   => $admin,
            'murid'   => $murid,
            'guru'   => $guru,
            'total'   => $total,
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
        $ekskul =MasterEkskul::all()->count();
        $senbud =MasterSenbud::all()->count();
        $rayon =MasterRayon::all()->count();
        $rombel =MasterRombel::all()->count();
        // dd($ekskul);
        return view('pages.guru.dashboard.index',[
            'ekskul' =>$ekskul,
            'senbud' =>$senbud,
            'rayon' =>$rayon,
            'rombel' =>$rombel,
        ]);
    }
}
