<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Suami;
use App\Istri;
use App\OrtuSuami;
use App\OrtuIstri;
use App\Nikah;
use PDF;

class SuamiController extends Controller
{
    public function store(Request $request){
        $suami = new Suami;
        $suami->nama = $request->nama;
        $suami->tempat = $request->tempat;
        $suami->tgl_lahir = $request->tgl_lahir;
        $suami->warganegara = $request->warganegara;
        $suami->agama = $request->agama;
        $suami->pekerjaan = $request->pekerjaan;
        $suami->alamat = $request->alamat;
        $suami->nama_ayah = $request->nama_ayah;
        $suami->status = $request->status;
        $suami->jml_istri = $request->jml_istri;
        
        $suami->save();

        return redirect('/formulir/sknikahistri');

    }

    public function storeIstri(Request $request){
        $suami = Suami::orderBy('created_at', 'desc')->first();
        $istri = new Istri;
        $istri->nama = $request->nama;
        $istri->tempat = $request->tempat;
        $istri->tgl_lahir = $request->tgl_lahir;
        $istri->warganegara = $request->warganegara;
        $istri->agama = $request->agama;
        $istri->pekerjaan = $request->pekerjaan;
        $istri->alamat = $request->alamat;
        $istri->nama_ayah = $request->nama_ayah;
        $istri->status = $request->status;
        $istri->id_suami = $suami->id;
       
        
        $istri->save();

        return redirect('/formulir/skorangtua');

    }

    public function getOrtuSuami(){
        $suami = Suami::orderBy('created_at', 'desc')->first();
        return view('/formulir/skorangtua', compact('suami'));
    }
    public function getOrtuIstri(){
        $istri = Istri::orderBy('created_at', 'desc')->first();
        return view('/formulir/skorangtuaistri', compact('istri'));
    }

    public function storeOrtuSuami(Request $request){
        $ortuSuami = new OrtuSuami;
        $ortuSuami->nama_ayah = $request->nama_ayah;
        $ortuSuami->tempat_ayah = $request->tempat_ayah;
        $ortuSuami->tgl_lahir_ayah = $request->tgl_lahir_ayah;
        $ortuSuami->warganegara_ayah = $request->warganegara_ayah;
        $ortuSuami->agama_ayah = $request->agama_ayah;
        $ortuSuami->pekerjaan_ayah = $request->pekerjaan_ayah;
        $ortuSuami->alamat_ayah = $request->alamat_ayah;
        $ortuSuami->nama_ibu = $request->nama_ibu;
        $ortuSuami->tempat_ibu = $request->tempat_ibu;
        $ortuSuami->tgl_lahir_ibu = $request->tgl_lahir_ibu;
        $ortuSuami->warganegara_ibu = $request->warganegara_ibu;
        $ortuSuami->agama_ibu = $request->agama_ibu;
        $ortuSuami->pekerjaan_ibu = $request->pekerjaan_ibu;
        $ortuSuami->alamat_ibu = $request->alamat_ibu;
       
        
        $ortuSuami->save();
        

        return redirect('/formulir/skorangtuaistri');


    }

    public function storeOrtuIstri(Request $request){
        $ortuIstri = new OrtuIstri;
        $ortuIstri->nama_ayah = $request->nama_ayah;
        $ortuIstri->tempat_ayah = $request->tempat_ayah;
        $ortuIstri->tgl_lahir_ayah = $request->tgl_lahir_ayah;
        $ortuIstri->warganegara_ayah = $request->warganegara_ayah;
        $ortuIstri->agama_ayah = $request->agama_ayah;
        $ortuIstri->pekerjaan_ayah = $request->pekerjaan_ayah;
        $ortuIstri->alamat_ayah = $request->alamat_ayah;
        $ortuIstri->nama_ibu = $request->nama_ibu;
        $ortuIstri->tempat_ibu = $request->tempat_ibu;
        $ortuIstri->tgl_lahir_ibu = $request->tgl_lahir_ibu;
        $ortuIstri->warganegara_ibu = $request->warganegara_ibu;
        $ortuIstri->agama_ibu = $request->agama_ibu;
        $ortuIstri->pekerjaan_ibu = $request->pekerjaan_ibu;
        $ortuIstri->alamat_ibu = $request->alamat_ibu;
       
        
        $ortuIstri->save();
        

        return redirect('/formulir/spkehendaknikah');


    }

    public function getKehendakNikah(){
        $suami = Suami::orderBy('created_at', 'desc')->first();
        $istri = Istri::orderBy('created_at', 'desc')->first();
        return view('/formulir/spkehendaknikah', compact('suami','istri'));
    }

    public function storeKehendakNikah(Request $request){
        $nikah = new Nikah;
        $nikah->nama_suami = $request->nama_suami;
        $nikah->nama_istri = $request->nama_istri;
        $nikah->tgl_nikah = $request->tgl_nikah;
        $nikah->pukul = $request->pukul;
        $nikah->mas_kawin = $request->mas_kawin;
        $nikah->lokasi = $request->lokasi;

        $nikah->save();
        return $this->cetak();
    }

    public function cetak(){
        $suami = Suami::orderBy('created_at', 'desc')->first();
        $istri = Istri::orderBy('created_at', 'desc')->first();
        $ortuSuami = OrtuSuami::orderBy('created_at', 'desc')->first();
        $ortuIstri = OrtuIstri::orderBy('created_at', 'desc')->first();
        $nikah = Nikah::orderBy('created_at', 'desc')->first();

        $pdf = \App::make('dompdf.wrapper');
        $pdf = PDF::loadView('/formulir/cetak', compact('suami','istri','ortuSuami','ortuIstri','nikah'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    
    }



}
