<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniBudaya extends Model
{
    use HasFactory;
    protected $table = 'senbud';
    protected $guarded = [];

    public function senbud()
    {
        return $this->belongsTo(MasterSenbud::class, 'senbud_id');
    }
    public function rombel()
    {
        return $this->belongsTo(MasterRombel::class, 'rombel_id');
    }
    public function rayon()
    {
        return $this->belongsTo(MasterRayon::class, 'rayon_id');
    }

    public function absensenbud()
    {
        return $this->hasMany(AbsensiSenbud::class);

    }
}
