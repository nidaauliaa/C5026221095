@extends('master2')
@section('judulhalaman','Data Sandal')

@section('konten')
	<h3>Data Barang</h3>

	<a href="/sandal/tambahsandal" class="btn btn-primary"> + Tambah Barang Baru</a>

	<br/>
    <p>Cari Sandal :</p>
	<form action="/sandal/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Sandal .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr class="text-center">
			<th>Kode Sandal</th>
			<th>Merk Sandal</th>
			<th>Stock Sandal</th>
			<th>Tersedia</th>
            <th>Opsi</th>

		</tr>
		@foreach($sandal as $p)
		<tr class="text-center">
			<td>{{ $p->kodesandal }}</td>
			<td>{{ $p->merksandal }}</td>
			<td>{{ $p->stocksandal }}</td>
            <td>{{ $p->tersedia }}</td>

			<td>
                <a href="/sandal/lihatsandal/{{ $p->kodesandal }}" class="btn btn-success">View</a>
				|
				<a href="/sandal/editsandal/{{ $p->kodesandal }}" class="btn btn-warning">Edit</a>
				|
				<a href="/sandal/hapus/{{ $p->kodesandal }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $sandal->links() }}
@endsection
