@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="/beras"> Beras </a> </li>
</ul>
@endsection

@section('judulbagian', 'Data Pegawai')
@section('konten')
    <div class="row">
        <div class="col-sm-6">
            <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Data</a>
        </div>

        <form action="/pegawai/cari" method="GET" class="form-inline">
            <div class="col-lg-4">
                <input type="text" class="form-control" name="cari"  style="width:370px" placeholder="Cari Pegawai berdasarkan nama atau alamat" value="{{ old('cari') }}">                </div>
            <div class="col-sm-2">
                <input type="submit" class="btn btn-default pull-right" value="CARI" >
            </div>
        </form>
    </div>

    <br>

	<table class="table">
    <thead class="thead">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="label label-primary"> View Detail</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="label label-info"> Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="label label-danger">Hapus</a>
            </td>
		</tr>

		@endforeach
     <thead>
	</table>

    <div class="text-center">
        {{ $pegawai->links() }}
    </div>

@endsection
