<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

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

        Alert::success('Congratulation', 'Data Created Successfully');
        return redirect()->route('admin.index');
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

        Alert::success('Congratulation', 'Data Update Successfully');
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $delete = Admin::find($id);
        $delete->delete();
        Alert::success('Congratulation', 'Data Delete Successfully');
        return redirect()->route('admin.index');
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

    public function createImport()
    {
        return view('pages.admin.import');
    }

    public function import(Request $request)
    {
        $fileName =request()->file->getClientOriginalName();
        request()->file('file')->storeAs('dataSiswa', $fileName, 'public');
        // dd($fileName);
        Excel::import(new SiswaImport, $request->file);
        // dd($request);
        Alert::success('Congratulation', 'File Upload Successfully');
        return redirect()->route('admin.index');
    }
}
