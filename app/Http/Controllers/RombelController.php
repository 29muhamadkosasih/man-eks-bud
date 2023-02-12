<?php

namespace App\Http\Controllers;

use App\Models\MasterRombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    public function index()
    {
        $datarombel = MasterRombel::all();
        return view('pages.guru.master-rombel.index', compact('datarombel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_rombel' => 'required',

        ]);

        MasterRombel::create($request->all());

        return redirect()->route('master-rombel.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    public function edit($id)
    {
        $edit = MasterRombel::find($id);
        $datarombel =MasterRombel::all();

        return view('pages.guru.master-rombel.index', compact('edit','datarombel'));
    }

    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $admin   = MasterRombel::find($id);
        // dd($id);
        $admin->update($input);

        return redirect()->route('master-rombel.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    public function destroy($id)
    {
        $delete = MasterRombel::find($id);
        $delete->delete();
        return redirect()->route('master-rombel.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}
