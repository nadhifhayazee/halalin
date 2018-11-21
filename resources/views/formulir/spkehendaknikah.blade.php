@extends('master')


@section('content')

<h1>Pemberitahuan Kehendak Nikah</h1>
{{-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> --}}
<hr>
<form action="/formulir/cetak" method="POST">
        {{ csrf_field() }}
        {{ method_field('POST') }}
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="nama">Nama Lengkap Calon Suami</label>
            <div class="form-line">
            <input type="text" class="form-control" name="nama_suami" id="nama" placeholder="" value="{{$suami->nama}}">
            </div>
        </div>
    </div>

    <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nama">Nama Lengkap Calon Istri</label>
                <div class="form-line">
                    <input type="text" name="nama_istri" class="form-control" id="nama" placeholder="" value="{{$istri->nama}}">
                </div>
            </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="tglnikah">Tanggal Nikah</label>
                    <div class="form-line">
                         <input type="date" name="tgl_nikah" class="form-control" id="tglnikah" placeholder="">
                    </div>   
                 </div>
            </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="jam">Pukul/Jam</label>
            <div class="form-line">
                <input type="text" name="pukul" class="form-control" id="jam" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="maskawin">Mas Kawin</label>
            <div class="form-line">
                <input type="text" name="mas_kawin" class="form-control" id="maskawin" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
            <div class="form-group col-md-12">
                <label for="tmpnikah">Lokasi Nikah</label>
                <div class="form-line">
                    <input type="text" name="lokasi" class="form-control" id="tmpnikah" placeholder="">
                </div>
            </div>
        </div>


    <div class="sinset" style="margin-top: 35px; margin-bottom: 30px">
        <button style="margin-right: 20px" class="btn btn-primary">SIMPAN</button>
        <a href="/formulir/cetak" style="margin-right: 20px" class="btn btn-primary">CETAK</a>
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
