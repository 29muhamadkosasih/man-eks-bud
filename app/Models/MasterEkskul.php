<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterEkskul extends Model
{
    use HasFactory;
    protected $table ='master_ekskul';
    protected $guarded = [];

    public function Ekstrakurikuler()
    {
        return $this->hasMany(Ekstrakurikuler::class);

    }
}
