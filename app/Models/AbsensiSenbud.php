<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiSenbud extends Model
{
    use HasFactory;
    protected $table = 'absen_senbud';
    protected $guarded = [];

    public function senbud()
    {
        return $this->belongsTo(SeniBudaya::class, 'nis_id');
    }
}
