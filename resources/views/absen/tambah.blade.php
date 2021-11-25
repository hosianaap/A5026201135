<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Absen</title>
</head>
<body>

	<h2>Tambah Data Absen</h2>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="Tanggal" required="required"> <br/>
		Status <input type="text" name="Status" maxlength="1" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
