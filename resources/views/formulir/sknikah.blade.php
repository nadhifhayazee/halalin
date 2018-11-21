@extends('master')



@section('content')

<h1>Surat Keterangan Nikah untuk Mempelai Laki-laki
    {{-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> --}}
</h1>
<hr>
<form action="/formulir/sknikahistri" method="POST">
    {{ csrf_field() }}
    {{ method_field('POST') }} 
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="nama">Nama Lengkap</label>
            <div class="form-line">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tempat">Tempat</label>
            <div class="form-line">
                <input type="text" name="tempat" class="form-control" id="tempat" placeholder="">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="ttl">Tanggal Lahir</label>
            <div class="form-line">
                <input type="date" class="form-control" name="tgl_lahir" id="ttl" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="wn">Warganegara</label>
            <div class="form-line">
                <input type="text" class="form-control" name="warganegara" id="wn" placeholder="">
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="agama">Agama</label>
            <div class="form-line">
                <select class="form-control" name="agama" id="agama">
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khonggucu">Khonggucu</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="job">Pekerjaan</label>
            <div class="form-line">
                <input type="text" name="pekerjaan" class="form-control" id="job" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="alamat">Alamat</label>
            <div class="form-line">
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="binbinti">Bin/Binti</label>
            <div class="form-line">
                <input type="text" name="nama_ayah" class="form-control" id="binbinti" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="status">Status Perkawinan</label>
            <div class="radio">
                <input type="radio" name="status" id="status1" value="Jejaka" onclick="Checkradiobutton()">&emsp;Jejaka
            </div>
            <div class="
                        radio"> 
                <input type="radio" name="status" id="status3" value="Duda" onclick="Checkradiobutton()" >&emsp;Duda
            </div>
            <div class="
                    radio">
                <input type="radio" name="status" id="beristri" value="Beristri" onclick="Checkradiobutton()" placeholder="">&emsp;Beristri
            </div>
            <div class="form-line">
                <input type="text" class="form-control" name="jml_istri" id="jumstri" placeholder="Jumlah istri" disabled>
            </div>
        </div>
    </div> 

    <div class="sinset" style="margin-top: 35px; margin-bottom: 30px">
        <button style="margin-right: 20px" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-danger">RESET</button>
    </div>




</form>

<script>
    function Checkradiobutton()
 {
  
  if(document.getElementById('status1').checked || document.getElementById('status2').checked || document.getElementById('status3').checked || document.getElementById('status4').checked)
 {

        document.getElementById('jumstri').disabled=true; 
   }else{
                    document.getElementById('jumstri').disabled = false;
                }
 }
</script>

@endsection