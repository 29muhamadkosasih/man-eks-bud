<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function login(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $data= Admin::where('username', $username)->first();
        if ($data) {
            Session::put('role', $data->role);
            Session::put('login', TRUE);

            Session::put('name', $data->name);



            if ($data->password==$password) {
                if ($data->role=="admin") {
                    $dataadmin = Admin::all();
                    // dd($dataadmin);
                    return view('pages.admin.dashboard.index',compact('dataadmin'));
                }elseif ($data->role=="guru") {
                    Session::put('guru',$data->role);

                    return view('pages.guru.dashboard.index');
                }else{
                    Session::put('murid',$data->role);
                    return redirect('dashboard-student');
                }

            }
            else {
                return redirect()->back()->with('danger','Password Salah');
            }
        }else{
            return redirect()->back()->with('danger','Username Tidak Ditemukan');
        }
    }

    public function logout(){
        Session::put('login',FALSE);
        return redirect('/');
    }
}
