@extends('master')

@section('content')

<h1>S.K. Tentang Orang Tua Mempelai Laki-laki</h1>
{{-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> --}}
<hr>
<form action="/formulir/skorangtuaistri" method="POST">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <p><strong>DATA AYAH</strong></p>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="nama">Nama Lengkap</label>
            <div class="form-line">
                <input type="text" class="form-control" name="nama_ayah" id="nama" placeholder="" value="{{$suami->nama_ayah}}">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tempat">Tempat</label>
            <div class="form-line">
                <input type="text" class="form-control" name="tempat_ayah" id="tempat" placeholder="">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="ttl">Tanggal Lahir</label>
            <div class="form-line">
                <input type="date" name="tgl_lahir_ayah" class="form-control" id="ttl" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="wn">Warganegara</label>
            <div class="form-line">
                <input type="text" name="warganegara_ayah" class="form-control" id="wn" placeholder="">
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="agama">Agama</label>
            <div class="form-line">
                <select class="form-control" name="agama_ayah" id="agama">
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
                <input type="text" name="pekerjaan_ayah" class="form-control" id="job" placeholder="">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="alamat">Alamat</label>
            <div class="form-line">
                <input type="text" name="alamat_ayah" class="form-control" id="alamat" placeholder="">
            </div>
        </div>
    </div>

    <p style="margin-top: 20px;"><strong>DATA IBU</strong></p>

    <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nama">Nama Lengkap</label>
                <div class="form-line">
                    <input type="text" name="nama_ibu" class="form-control" id="nama" placeholder="">
                </div>
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat">Tempat</label>
                <div class="form-line">
                    <input type="text" name="tempat_ibu" class="form-control" id="tempat" placeholder="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="ttl">Tanggal Lahir</label>
                <div class="form-line">
                    <input type="date" name="tgl_lahir_ibu" class="form-control" id="ttl" placeholder="">
                </div>
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="wn">Warganegara</label>
                <div class="form-line">
                    <input type="text" name="warganegara_ibu" class="form-control" id="wn" placeholder="">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="agama">Agama</label>
                <div class="form-line">
                    <select class="form-control" name="agama_ibu" id="agama">
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
                    <input type="text" name="pekerjaan_ibu" class="form-control" id="job" placeholder="">
                </div>
            </div>
        </div>
    
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="alamat">Alamat</label>
                <div class="form-line">
                    <input type="text" name="alamat_ibu" class="form-control" id="alamat" placeholder="">
                </div>
            </div>
        </div>

        {{-- <p style="margin-top: 20px;"><strong>DATA ANAK KANDUNG</strong></p>

    <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nama">Nama Lengkap</label>
                <div class="form-line">
                    <input type="text" class="form-control" id="nama" placeholder="">
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
        </div> --}}



    <div class="sinset" style="margin-top: 35px; margin-bottom: 30px">
        <button style="margin-right: 20px" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-danger">RESET</button>
    </div>




</form>
    

@endsection
