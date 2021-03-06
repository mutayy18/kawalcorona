<?php

namespace App\Models;
use App\Models\Kota;
use App\Models\Desa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public function Kota () {
        return $this->belongsTo('App\Models\Kota','id_kota');
    }
    public function Desa () {
        return $this->hasMany('App\Models\Desa','id_kecamatan');
    }
    use HasFactory;
}
