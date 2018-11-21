@extends('master')

@section('sidebar')
<li id="tombol">
    <a class="square_btn" href="/formulir/sknikah">
        S.K. Untuk Nikah
    </a>
</li>
<li id="tombol">
    <a href="/formulir/skasalusul" class="square_btn">S.K. Asal-usul</button></a>
</li>
<li id="tombol">
    <a class="square_btn button-clicked" href="/formulir/skasalusul">S. Persetujuan Mempelai</a>
</li>
<li id="tombol">
    <a class="square_btn" href="/formulir/skorangtua">S.K. Tentang Orang Tua</a>
</li>
<li id="tombol">
    <a class="square_btn" href="/formulir/suratizinortu">Surat Izin Orang Tua</a>
</li>
<li id="tombol">
    <a class="square_btn" href="/formulir/skkematian">S.K. Kematian Suami/Istri</a>
</li>
<li id="tombol">
    <a class="square_btn" href="/formulir/spkehendaknikah">S.P. Kehendak Nikah</a>
</li>
@endsection

@section('content')

<h1>Surat Persetujuan Mempelai</h1>
{{-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> --}}
<hr>
<form action="">
    <p><strong>CALON SUAMI</strong></p>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="nama">Nama Lengkap</label>
            <div class="form-line">
                <input type="text" class="form-control" id="nama" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="bin">Bin</label>
            <div class="form-line">
                <input type="text" class="form-control" id="bin" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tempat">Tempat</label>
            <div class="form-line">
                <input type="text" class="form-control" id="tempat" placeholder="">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="ttl">Tanggal Lahir</label>
            <div class="form-line">
                <input type="date" class="form-control" id="ttl" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="wn">Warganegara</label>
            <div class="form-line">
                <input type="text" class="form-control" id="wn" placeholder="">
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="agama">Agama</label>
            <div class="form-line">
                <select class="form-control" id="agama">
                    <option>Islam</option>
                    <option>Katolik</option>
                    <option value="">Hindu</option>
                    <option value="">Budha</option>
                    <option value="">Khonggucu</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="job">Pekerjaan</label>
            <div class="form-line">
                <input type="text" class="form-control" id="job" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="alamat">Alamat</label>
            <div class="form-line">
                <input type="text" class="form-control" id="alamat" placeholder="">
            </div>
        </div>
    </div>

    <p style="margin-top: 20px;"><strong>CALON ISTRI</strong></p>

    <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nama">Nama Lengkap</label>
                <div class="form-line">
                    <input type="text" class="form-control" id="nama" placeholder="">
                </div>
            </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="binti">Binti</label>
                    <div class="form-line">
                        <input type="text" class="form-control" id="binti" placeholder="">
                    </div>
                </div>
            </div>
    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat">Tempat</label>
                <div class="form-line">
                    <input type="text" class="form-control" id="tempat" placeholder="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="ttl">Tanggal Lahir</label>
                <div class="form-line">
                    <input type="date" class="form-control" id="ttl" placeholder="">
                </div>
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="wn">Warganegara</label>
                <div class="form-line">
                    <input type="text" class="form-control" id="wn" placeholder="">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="agama">Agama</label>
                <div class="form-line">
                    <select class="form-control" id="agama">
                        <option>Islam</option>
                        <option>Katolik</option>
                        <option value="">Hindu</option>
                        <option value="">Budha</option>
                        <option value="">Khonggucu</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="job">Pekerjaan</label>
                <div class="form-line">
                    <input type="text" class="form-control" id="job" placeholder="">
                </div>
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="alamat">Alamat</label>
                <div class="form-line">
                    <input type="text" class="form-control" id="alamat" placeholder="">
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
