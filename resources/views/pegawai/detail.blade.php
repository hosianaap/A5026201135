@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="/pegawai"> Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="/beras"> Beras </a> </li>
</ul>
@endsection

@section('judulbagian', 'Detail Data Pegawai')
@section('konten')
	@foreach($pegawai as $p)
        <div class="form-group row">
            <label class="col-sm-2" for="nama">Nama </label>
            <div class="col-sm-10">
               {{ $p->pegawai_nama }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="jabatan "> Jabatan </label>
            <div class="col-sm-10">
                {{ $p->pegawai_jabatan }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="umur "> Umur </label>
            <div class="col-sm-10">
                {{ $p->pegawai_umur }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="alamat "> Alamat </label>
            <div class="col-sm-10">
                 {{ $p->pegawai_alamat }}
            </div>
        </div>

		<div class="d-flex text-center">
            <a href="/pegawai" class="btn btn-info"> Kembali </a>
        </div>
	@endforeach

@endsection
