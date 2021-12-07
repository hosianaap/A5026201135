@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li class="active"><a href="/absen"> Absen </a></li>
    <li> <a href="#"> Praktikum </a> </li>
</ul>
@endsection

@section('judulbagian', 'Tambah Data Absen')
@section('konten')
	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-2" for="IDPegawai"> ID Pegawai </label>
            <div class="col-sm-10">
                <select name="IDPegawai" class="form-control">
                    @foreach($pegawai as $p)
                     <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}
                     </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="dtpickerdemo" class="col-sm-2"> Tanggal </label>
            <div class='col-sm-10 input-group date' id='dtpickerdemo'>
                <input type='text' class="col-sm-10 form-control" name="Tanggal" required="required" />
                <span class="input-group-addon">
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
                <input type="radio" id="Hadir" name="Status" value="H">
                <label for="Hadir">Hadir</label><br>
                <input type="radio" id="Izin" name="Status" value="I">
                <label for="Izin">Izin</label><br>
                <input type="radio" id="Sakit" name="Status" value="S" checked="checked">
                <label for="Sakit">Sakit</label><br>
                <input type="radio" id="Alpha" name="Status" value="A">
                <label for="Alpha">Alpha</label>
            </div>
        </div>

        <div class="d-flex text-center">
            <button type="submit" class="btn btn-success"> Simpan Data </button>
            <a href="/absen" class="btn btn-info"> Kembali </a>
        </div>

	</form>

@endsection
