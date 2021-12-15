@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai"> Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="/beras"> Beras </a> </li>
    <li class="active"> <a href="/karyawan1"> EAS - Soal C3 </a> </li>
</ul>
@endsection

@section('judulbagian', 'Detail Data Karyawan1')
@section('konten')
	@foreach($karyawan1 as $k)
        <div class="form-group row">
            <label class="col-sm-2" for="NIP"> NIP </label>
            <div class="col-sm-10">
               {{ $k->NIP }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="Nama "> Nama </label>
            <div class="col-sm-10">
                {{ $k->Nama }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="Pangkat "> Pangkat </label>
            <div class="col-sm-10">
                {{ $k->Pangkat }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="Gaji "> Gaji </label>
            <div class="col-sm-10">
                {{ number_format($k->Gaji, 0, ',', '.')}}
            </div>
        </div>

		<div class="d-flex text-center">
            <a href="/karyawan1" class="btn btn-info"> Kembali </a>
        </div>
	@endforeach

@endsection
