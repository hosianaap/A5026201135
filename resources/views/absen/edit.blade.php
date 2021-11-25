<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Absen</title>
</head>
<body>

	<h2>Edit Data Absen </h2>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $a->ID }}"> <br/>
        IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $a->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="Tanggal" value="{{ $a->Tanggal }}"> <br/>
		Status <input type="text" maxlength="1" required="required" name="Status" value="{{ $a->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
