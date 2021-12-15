@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li> <a href="/beras"> Beras </a> </li>
    <li class="active"> <a href="/karyawan1"> EAS - Soal C3 </a> </li>
</ul>
@endsection

@section('judulbagian', 'Data Karyawan1')
@section('konten')
	<table class="table">
    <thead class="thead">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th> Opsi </th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
            <td>{{ $k->Nama }}</td>
            <td>{{ $k->Pangkat }}</td>
            <td>{{number_format($k->Gaji, 0, ',', '.')}}</td>
			<td>
                <a href="/karyawan1/view/{{ $k->NIP}}" class="label label-primary"> View Detail</a>
				|
				<a href="/karyawan1/edit/{{ $k->NIP }}" class="label label-info"> Edit</a>
            </td>
		</tr>

		@endforeach
     <thead>
	</table>

    <div class="text-center">
        {{ $karyawan1->links() }}
    </div>

@endsection
