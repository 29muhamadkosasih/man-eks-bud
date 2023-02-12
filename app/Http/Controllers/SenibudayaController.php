<?php

namespace App\Http\Controllers;

use App\Models\SeniBudaya;
use App\Models\MasterRayon;
use App\Models\MasterRombel;
use App\Models\MasterSenbud;
use Illuminate\Http\Request;

class SenibudayaController extends Controller
{
    public function index()
    {
        $senbud =SeniBudaya::all();
        $rombel =MasterRombel::get();
        $rayon =MasterRayon::get();
        $m_senbud =MasterSenbud::get();
        return view('pages.murid.senibudaya.index',[
            'rombel'             =>$rombel,
            'rayon'              =>$rayon,
            'm_senbud'             =>$m_senbud,
            'senbud'             =>$senbud,
        ]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'rombel_id' => 'required',
            'rayon_id' => 'required',
            'senbud_id' => 'required',
            'alasan' => 'required',

        ]);
        $menu= MasterSenbud::findOrFail($request->senbud_id);
        $ketersediaan = $menu->kouta - $request->jumlah;
        SeniBudaya::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'rombel_id' => $request->rombel_id,
            'rayon_id' => $request->rayon_id,
            'senbud_id' => $request->senbud_id,
            'alasan' => $request->alasan,
            'jumlah' => $request->jumlah

        ]);

        $menu->update([
            'kouta' => $ketersediaan
        ]);

        return redirect()->route('senibudaya.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    public function edit($id)
    {
        $edit = SeniBudaya::find($id);
        $rombel =MasterRombel::get();
        $rayon =MasterRayon::get();
        $m_senbud =MasterSenbud::get();
        $senbud =SeniBudaya::all();

        return view('pages.murid.senibudaya.index' ,[
            'edit'               => $edit,
            'rombel'             =>$rombel,
            'rayon'              =>$rayon,
            'm_senbud'             =>$m_senbud,
            'senbud'            =>$senbud,
        ]);
    }

    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $admin   = SeniBudaya::find($id);
        $admin->update($input);

        return redirect()->route('senibudaya.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    public function destroy($id)
    {
        $delete = SeniBudaya::find($id);
        $delete->delete();
        return redirect()->route('senibudaya.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}
