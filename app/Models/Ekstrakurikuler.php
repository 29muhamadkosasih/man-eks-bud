<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ekstrakurikuler extends Model
{
    use HasFactory;
    protected $table = 'ekskul';
    protected $guarded = [];

    public function ekskul()
    {
        return $this->belongsTo(MasterEkskul::class, 'ekskul_id');
    }
    public function rombel()
    {
        return $this->belongsTo(MasterRombel::class, 'rombel_id');
    }
    public function rayon()
    {
        return $this->belongsTo(MasterRayon::class, 'rayon_id');
    }

    public function absenekskul()
    {
        return $this->hasMany(AbsensiEkskul::class);

    }
}

