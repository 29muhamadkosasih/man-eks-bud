<?php

namespace App\Exports;

use App\Models\AbsensiEkskul;
use Maatwebsite\Excel\Concerns\FromCollection;

class ekskulExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AbsensiEkskul::all();
    }
}