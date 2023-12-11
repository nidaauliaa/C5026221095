@extends('master2')
@section('judulhalaman','Data Kapas')

@section('konten')
	<h4>latihan mandiri</h4>
	<h3>Data Kapas</h3>

	<a href="/kapas/tambahkapas" class="btn btn-primary"> + Tambah Kapas Baru</a>

	<br/>
    <p>Cari Data Kapas :</p>
	<form action="/kapas/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Kapas .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Kapas</th>
			<th>Nama Kapas</th>
			<th>Jumlah</th>
            <th>Opsi</th>
		</tr>
		@foreach($kapas as $p)
		<tr>
			<td>{{ $p->kodekapas }}</td>
			<td>{{ $p->namakapas }}</td>
			<td>{{ $p->jumlah }}</td>
			<td>
                <a href="/kapas/lihatkapas/{{ $p->kodekapas }}" class="btn btn-success">View</a>
				|
				<a href="/kapas/editkapas/{{ $p->kodekapas }}" class="btn btn-warning">Edit</a>
				|
				<a href="/kapas/hapus/{{ $p->kodekapas }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $kapas->links() }}
@endsection
