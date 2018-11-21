<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Istri extends Model
{
    protected $fillable = [
        'nama','tempat','tgl_lahir','warganegara',
        'agama','pekerjaan','alamat','nama_ayah','status',
        'id_suami','id_ibu'
    ];
}
