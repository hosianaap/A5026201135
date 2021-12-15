@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="/beras"> Beras </a> </li>
    <li class="active"> <a href="/karyawan1"> EAS - Soal C3 </a> </li>
</ul>
@endsection

@section('judulbagian', 'Edit Data Karyawan1')
@section('konten')
	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2" for="NIP"> NIP </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id" required="required" value="{{ $k->NIP}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="Nama"> Nama </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Nama" required="required" value="{{ $k->Nama}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="Pangkat"> Pangkat </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Pangkat" required="required" value="{{ $k->Pangkat }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="Gaji"> Gaji </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="Gaji" required="required" value="{{$k->Gaji}}">
            </div>
        </div>

        <div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/karyawan1" class="btn btn-info"> Kembali </a>
        </div>

	</form>
	@endforeach

@endsection
