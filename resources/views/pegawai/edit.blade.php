@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="#"> Praktikum </a> </li>
</ul>
@endsection

@section('judulbagian', 'Edit Data Pegawai')
@section('konten')
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <label class="col-sm-2" for="nama">Nama </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="jabatan "> Jabatan </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="umur "> Umur </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="alamat "> Alamat </label>
            <div class="col-sm-10">
                <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

		<div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/pegawai" class="btn btn-info"> Kembali </a>
        </div>
	</form>
	@endforeach

@endsection
