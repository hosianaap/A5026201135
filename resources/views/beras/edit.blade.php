@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li class="active"> <a href="/beras"> Beras </a> </li>
</ul>
@endsection

@section('judulbagian', 'Edit Data Beras')
@section('konten')
	@foreach($beras as $b)
	<form action="/beras/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->kodeberas }}">
        <div class="form-group row">
            <label class="col-sm-2" for="merkberas">Merk Beras </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="merkberas" required="required" value="{{ $b->merkberas}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="stockberas"> Stock Beras </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stockberas" required="required" value="{{ $b->stockberas }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2" for="tersedia"> Tersedia </label>
            <div class="col-sm-10">
                <input type="radio" id="Ya" name="tersedia" value="Y" @if ($b->tersedia === "Y" ) checked="checked" @endif>
                <label for="Ya">Ya</label><br>
                <input type="radio" id="Tidak" name="tersedia" value="T"  @if ($b->tersedia === "T") checked="checked" @endif>
                <label for="Tidak">Tidak</label><br>
            </div>
        </div>

        <div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/beras" class="btn btn-info"> Kembali </a>
        </div>

	</form>
	@endforeach

@endsection
