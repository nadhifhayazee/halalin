<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrtuSuami extends Model
{
    protected $fillable = [
        'nama_ayah','tempat_ayah','tgl_lahir_ayah','warganegara_ayah',
        'agama_ayah','pekerjaan_ayah','alamat_ayah','nama_ibu',
        'tempat_ibu','tgl_lahir_ibu','warganegara_ibu',
        'agama_ibu','pekerjaan_ibu','alamat_ibu'
    ];
}
