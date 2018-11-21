<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suami extends Model
{
    protected $fillable = [
        'nama','tempat','tgl_lahir','warganegara',
        'agama','pekerjaan','alamat','nama_ayah','status',
        'id_ibu'
    ];
}
