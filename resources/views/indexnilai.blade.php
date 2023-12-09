@extends('master2')
@section('judulhalaman','Data Nilai')

@section('konten')
	<h3>Data Nilai</h3>

	<a href="/nilai/tambahnilai" class="btn btn-primary"> + Tambah Nilai Baru</a>

	<br/>
    {{-- <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Pegawai .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form> --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>

		</tr>
		@foreach($nilai as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nrp }}</td>
			<td>{{ $p->nilaiangka }}</td>
            <td>{{ $p->sks }}</td>
			<td>
                @if($p->nilaiangka >= 81)
                A
                @elseif ($p->nilaiangka >= 61)
                B
                @elseif ($p->nilaiangka >= 41)
                C
                @else
                D
                @endif
            </td>
            <td>{{ $p->nilaiangka * $p->sks }}</td>
		</tr>
		@endforeach
	</table>
@endsection
