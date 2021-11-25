<!DOCTYPE html>
<html>
<head>
	<title>Tabel Absen</title>
</head>
<body>

	<h2>Data Absen</h2>

	<a href="/absen/tambah"> + Tambah Data Absen Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
            <th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
            <td>{{ $a->ID}}</td>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
