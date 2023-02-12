<?php

namespace App\Http\Controllers;

use App\Models\MasterRayon;
use App\Models\MasterEkskul;
use App\Models\MasterRombel;
use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Collection;

class EkstrakurikulerController extends Controller
{

    public function index()
    {
        $ekstrakurikuler =Ekstrakurikuler::all();
        $rombel =MasterRombel::get();
        $rayon =MasterRayon::get();
        $ekskul =MasterEkskul::get();
        return view('pages.murid.ekskul.index',[
            'rombel'             =>$rombel,
            'rayon'              =>$rayon,
            'ekskul'             =>$ekskul,
            'ekstrakurikuler'    =>$ekstrakurikuler,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'rombel_id' => 'required',
            'rayon_id' => 'required',
            'ekskul_id' => 'required',
            'alasan' => 'required',
            'jumlah' => 'required',

        ]);

        // $data =MasterEkskul::get('kouta');
        // // dd($data);
        // $ketersediaan = $data - $request->jumlah;

        // dd($ketersediaan);
        $menu= MasterEkskul::findOrFail($request->ekskul_id);
        // dd($menu);
        $ketersediaan = $menu->kouta - $request->jumlah;
        // dd($ketersediaan);

        Ekstrakurikuler::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'rombel_id' => $request->rombel_id,
            'rayon_id' => $request->rayon_id,
            'ekskul_id' => $request->ekskul_id,
            'alasan' => $request->alasan,
            'jumlah' => $request->jumlah

        ]);


        // Ekstrakurikuler::create($request->all());
        // dd($data);
        // $data - 1 ;
        // dd($data);
        // $datam = 1;
        // // dd($datum);

        // $jumlah = $data - $datam;

        $menu->update([
            'kouta' => $ketersediaan
        ]);

        return redirect()->route('ekstrakurikuler.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    public function edit($id)
    {
        $edit = Ekstrakurikuler::find($id);
        $rombel =MasterRombel::get();
        $rayon =MasterRayon::get();
        $ekskul =MasterEkskul::get();
        $ekstrakurikuler =Ekstrakurikuler::all();

        return view('pages.murid.ekskul.index' ,[
            'edit'               => $edit,
            'rombel'             =>$rombel,
            'rayon'              =>$rayon,
            'ekskul'             =>$ekskul,
            'ekstrakurikuler'    =>$ekstrakurikuler,
        ]);
    }

    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $admin   = Ekstrakurikuler::find($id);
        $admin->update($input);

        return redirect()->route('ekstrakurikuler.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    public function destroy($id)
    {
        $delete = Ekstrakurikuler::find($id);
        $delete->delete();
        return redirect()->route('ekstrakurikuler.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}
