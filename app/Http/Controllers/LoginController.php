<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\MasterRayon;
use App\Models\MasterEkskul;
use App\Models\MasterRombel;
use App\Models\MasterSenbud;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
     {
        $username = $request->username;
        $password = $request->password;
        $data= Admin::where('username', $username)->first();
        if ($data) {
            Session::put('role', $data->role);
            Session::put('login', TRUE);

            Session::put('name', $data->name);
            Session::put('id', $data->id);
            Session::put('username', $data->username);

            if ($data->password==$password) {
                if ($data->role=="admin") {

                    $dataadmin = Admin::all();
                    $total =Admin::all()->count();
                    $admin =Admin::where('role', 'admin')->count();
                    $murid =Admin::where('role', 'murid')->count();
                    $guru =Admin::where('role', 'guru')->count();

                    toast('Login successfully','success');
                    return view('pages.admin.dashboard.index',[
                        'dataadmin'   => $dataadmin,
                        'admin'   => $admin,
                        'murid'   => $murid,
                        'guru'   => $guru,
                        'total'   => $total,
                    ]);
                }elseif ($data->role=="guru") {
                    Session::put('guru',$data->role);

                    $ekskul =MasterEkskul::all()->count();
                    $senbud =MasterSenbud::all()->count();
                    $rayon =MasterRayon::all()->count();
                    $rombel =MasterRombel::all()->count();
                    toast('Login successfully','success');
                    return view('pages.guru.dashboard.index',[
                        'ekskul' =>$ekskul,
                        'senbud' =>$senbud,
                        'rayon' =>$rayon,
                        'rombel' =>$rombel,
                    ]);
                }else{
                    toast('Login successfully','success');
                    Session::put('murid',$data->role);
                    return redirect('dashboard-student');
                }

            }
            else {
                toast('Oops... Password Salah','warning');
                return redirect()->back();
            }
        }else{
            toast('Oops... Username Tidak Ditemukan','warning');
            return redirect()->back();
        }
    }

    public function logout(){
        Session::put('login',FALSE);
        return redirect('/');


  }
}