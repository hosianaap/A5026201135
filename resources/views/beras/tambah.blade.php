@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li class="active"> <a href="/beras"> Beras </a> </li>
</ul>
@endsection

@section('judulbagian', 'Tambah Data Beras')
@section('konten')
	<form action="/beras/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-2" for="merkberas">Merk Beras </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="merkberas" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="stockberas"> Stock Beras </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stockberas" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="tersedia"> Tersedia </label>
            <div class="col-sm-10">
                <input type="radio" id="Ya" name="tersedia" value="Y">
                <label for="Ya">Ya</label><br>
                <input type="radio" id="Tidak" name="tersedia" value="T">
                <label for="Tidak">Tidak</label><br>
            </div>
        </div>

        <div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/beras" class="btn btn-info"> Kembali </a>
        </div>

	</form>

@endsection
