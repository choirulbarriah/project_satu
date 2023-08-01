@extends('layout1.main2')
@section('content')

<div class="card">
    <div class="card-body">


<h4><b>Tambah karyawan</b></h4>
<br>
<form action="{{ url('karyawan/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="nik_karyawan_choirul" class="col-sm-2 col-form-label">NIK KARYAWAN</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nik_karyawan_choirul" name="nik_karyawan_choirul">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_karyawan_choirul" class="col-sm-2 col-form-label">NAMA KARYAWAN</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_karyawan_choirul" name="nama_karyawan_choirul">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat_karyawan_choirul" class="col-sm-2 col-form-label">ALAMAT KARYAWAN</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat_karyawan_choirul" name="alamat_karyawan_choirul">
    </div>
</div>
<div class="mb-3 row">
    <label for="Nohp_karyawan_choirul" class="col-sm-2 col-form-label">NO HP</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="Nohp_karyawan_choirul" name="Nohp_karyawan_choirul">
    </div>
</div>
<input type="submit" value="Simpan" class="btn btn-primary float-right">
</form> 
</div>
</div>
@endsection