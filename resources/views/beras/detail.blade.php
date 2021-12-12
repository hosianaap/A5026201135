@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai"> Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li class="active"> <a href="/beras"> Beras </a> </li>
</ul>
@endsection

@section('judulbagian', 'Detail Data Beras')
@section('konten')
	@foreach($beras as $b)
        <div class="form-group row">
            <label class="col-sm-2" for="merkberas"> Merk Beras </label>
            <div class="col-sm-10">
               {{ $b->merkberas }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="stockberas "> Stock Beras </label>
            <div class="col-sm-10">
                {{ $b->stockberas }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="tersedia "> Tersedia </label>
            <div class="col-sm-10">
                @if($b->tersedia === 'Y')
                    Ya
                @else
                    Tidak
                @endif
            </div>
        </div>

		<div class="d-flex text-center">
            <a href="/beras" class="btn btn-info"> Kembali </a>
        </div>
	@endforeach

@endsection
