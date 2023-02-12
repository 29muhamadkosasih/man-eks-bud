<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $dataadmin = Admin::all();
        return view('pages.admin.index', compact('dataadmin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        Admin::create($request->all());

        return redirect()->route('admin.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    public function edit($id)
    {
        $edit = Admin::find($id);
        $dataadmin =Admin::all();

        return view('pages.admin.index', compact('edit','dataadmin'));
    }

    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $admin   = Admin::find($id);
        // dd($id);
        $admin->update($input);

        return redirect()->route('admin.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    public function destroy($id)
    {
        $delete = Admin::find($id);
        $delete->delete();
        return redirect()->route('admin.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }

    public function dashboard()
    {
        return view('pages.admin.dashboard.index');
    }

    public function laporan()
    {
        $dataadmin = Admin::all();
        return view('pages.admin.laporan.index', compact('dataadmin'));
    }
}
