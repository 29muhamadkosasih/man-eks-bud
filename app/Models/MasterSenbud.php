<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSenbud extends Model
{
    use HasFactory;
    protected $table ='master_senbud';
    protected $guarded = [];

    public function senibudaya()
    {
        return $this->hasMany(SeniBudaya::class);

    }
}
