<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table = 'kehadiran';
    protected $guarded = [];
    
    public function ambalan()
    {
        return $this->hasOne('App\Ambalan');
    }

    public function siswa()
    {
        return $this->hasOne('App\Siswa');
    }
}
