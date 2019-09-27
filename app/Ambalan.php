<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambalan extends Model
{
    protected $table = 'ambalan';
    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }

    public function kehadiran()
    {
        return $this->belongsTo('App\Kehadiran');
    }
}
