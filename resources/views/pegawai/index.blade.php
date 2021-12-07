@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="#"> Praktikum </a> </li>
</ul>
@endsection

@section('judulbagian', 'Data Pegawai')
@section('konten')
	<table class="table">
    <thead class="thead">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="label label-info"> Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="label label-danger">Hapus</a>

            </td>
		</tr>

		@endforeach
     <thead>
	</table>

    <div class="d-flex text-center">
        <a href="/pegawai/tambah" class="btn btn-primary"> Tambah Data</a>
    </div>
@endsection
