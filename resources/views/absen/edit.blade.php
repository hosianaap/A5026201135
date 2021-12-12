@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li class="active"><a href="/absen"> Absen </a></li>
    <li> <a href="/beras"> Beras </a> </li>
</ul>
@endsection

@section('judulbagian', 'Edit Data Absen')
@section('konten')
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $a->ID }}">

        <div class="form-group row">
            <label class="col-sm-2" for="IDPegawai"> ID Pegawai </label>
            <div class="col-sm-10" >
                <select name="IDPegawai" class="form-control" >
                    @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="dtpickerdemo" class="col-sm-2 control-label "> Tanggal </label>
                <div class='col-sm-10 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="col-sm-10 form-control" name="Tanggal" value="{{ $a->Tanggal }}" required="required" />
                        <span class="input-group-addon ">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                </div>
        </div>

        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>

        <div class="form-group row">
            <label class="col-sm-2" for="Status"> Status </label>
            <div class="col-sm-10">
                <input type="radio" id="Hadir" name="Status" value="H" @if ($a->Status === "H" ) checked="checked" @endif>
                <label for="Hadir">Hadir</label><br>
                <input type="radio" id="Izin" name="Status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                <label for="Izin">Izin</label><br>
                <input type="radio" id="Sakit" name="Status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                <label for="Sakit">Sakit</label><br>
                <input type="radio" id="Alpha" name="Status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                <label for="Alpha">Alpha</label>
            </div>
        </div>

        <div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/absen" class="btn btn-info"> Kembali </a>
        </div>

	</form>
	@endforeach

@endsection
