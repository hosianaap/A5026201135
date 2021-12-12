@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="/beras"> Beras </a> </li>
</ul>
@endsection

@section('judulbagian', 'Tambah Data Pegawai')
@section('konten')
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2" for="nama">Nama </label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" name="nama" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="jabatan "> Jabatan </label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" name="jabatan" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="umur "> Umur </label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="umur" required="required">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2" for="alamat "> Alamat </label>
                <div class="col-sm-10">
                    <textarea name="alamat"  class="form-control" required="required"></textarea>
                </div>
            </div>

            <div class="d-flex text-center">
                     <button type="submit" class="btn btn-success"> Simpan Data </button>
                     <a href="/pegawai" class="btn btn-info"> Kembali </a>
            </div>
	</form>
@endsection
