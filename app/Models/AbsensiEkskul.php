<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiEkskul extends Model
{
    use HasFactory;
    protected $table = 'absen_ekskul';
    protected $guarded = [];

    public function ekstrakurikuler()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'nis_id');
    }

}
