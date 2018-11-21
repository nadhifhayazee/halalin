<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nikah extends Model
{
    protected $fillable = [
        'nama_suami','nama_istri','tgl_nikah','pukul',
        'mas_kawin','lokasi'
    ];
}
