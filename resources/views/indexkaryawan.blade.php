@extends('master2')
@section('judulhalaman','Data Karyawan')

@section('konten')
    <h4>latihan mandiri</h4>
	<h3>Data Karyawan</h3>

	<a href="/karyawan/tambahkaryawan" class="btn btn-primary"> + Tambah Karyawan Baru</a>

	<br/>
    <p>Cari Karyawan :</p>
	<form action="/karyawan/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Karyawan .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr class="text-center">
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Opsi</th>

		</tr>
		@foreach($karyawan as $p)
		<tr class="text-center">
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper($p->namalengkap) }}</td>
			<td>{{ $p->divisi }}</td>
            <td>{{ strtolower($p->departemen) }}</td>

			<td>
                <a href="/karyawan/lihatkaryawan/{{ $p->kodepegawai }}" class="btn btn-success">View</a>
				|
				<a href="/karyawan/editkaryawan/{{ $p->kodepegawai }}" class="btn btn-warning">Edit</a>
				|
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- {{ $sandal->links() }} --}}
@endsection
