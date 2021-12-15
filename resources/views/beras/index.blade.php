@extends('layout.bahagia')

@section('side-navbar')
<ul class="nav nav-pills nav-stacked">
    <li><a href="/pegawai" > Pegawai </a></li>
    <li><a href="/absen"> Absen </a></li>
    <li class="active"> <a href="/beras"> Beras </a> </li>
    <li> <a href="/karyawan1"> EAS - Soal C3</a> </li>
</ul>
@endsection

@section('judulbagian', 'Data Beras')
@section('konten')
    <div class="row">
        <div class="col-sm-6">
            <a href="/beras/tambah" class="btn btn-primary"> + Tambah Data</a>
        </div>

        <form action="/beras/cari" method="GET" class="form-inline">
            <div class="col-lg-4">
                <input type="text" class="form-control" name="cari"  style="width:370px" placeholder="Cari beras berdasarkan merk" value="{{ old('cari') }}">                </div>
            <div class="col-sm-2">
                <input type="submit" class="btn btn-default pull-right" value="CARI" >
            </div>
        </form>
    </div>

    <br>

	<table class="table">
    <thead class="thead">
		<tr>
			<th>Merk Beras</th>
			{{-- <th>Stock Beras</th> --}}
			<th>Tersedia</th>
            <th> Opsi </th>
		</tr>
		@foreach($beras as $b)
		<tr>
			<td>{{ $b->merkberas }}</td>
			{{-- <td>{{ $b->stockberas }}</td> --}}
            <td>
                @if($b->tersedia === 'Y')
                    Ya
                @else
                    Tidak
                @endif
            </td>
			<td>
                <a href="/beras/view/{{ $b->kodeberas}}" class="label label-primary"> View Detail</a>
				|
				<a href="/beras/edit/{{ $b->kodeberas }}" class="label label-info"> Edit</a>
				|
				<a href="/beras/hapus/{{ $b->kodeberas }}" class="label label-danger">Hapus</a>
            </td>
		</tr>

		@endforeach
     <thead>
	</table>

    <div class="text-center">
        {{ $beras->links() }}
    </div>

@endsection
