@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li class="active"><a href="/absen"> Absen </a></li>
    <li> <a href="/beras"> Beras </a> </li>
</ul>
@endsection

@section('judulbagian', 'Data Absen')
@section('konten')
    <div>
       <a href="/absen/tambah" class="btn btn-primary"> + Tambah Data</a>
    </div>

    <br>

	<table class="table">
        <thead class="thead">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}" class="label label-info">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}" class="label label-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
        </thead>
	</table>

    <div class="text-center">
        {{ $absen->links()}}
    </div>

    <p>
        <strong> Keterangan Status </strong>
        <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
    </p>
@endsection
