<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa';
    protected $guarded = [];

    public function ambalan()
    {
        return $this->hasOne('App\Ambalan');
    }

    public function kehadiran()
    {
        return $this->hasOne('App\Kehadiran');
    }
}
