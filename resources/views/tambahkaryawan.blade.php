@extends('master2')
@section('judulhalaman','Tambah Karyawan')

@section('konten')

	<h3>Tambah Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="kodepegawai" class="col-md-2 control-label">Kode Pegawai</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai">
            </div>
        </div>
        <div class="form-group row">
            <label for="namalengkap" class="col-md-2 control-label">Nama Lengkap</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-md-2 control-label">Divisi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="divisi" name="divisi">
            </div>
        </div>
        <div class="form-group row">
            <label for="departemen" class="col-md-2 control-label">Departemen</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="departemen" name="departemen">
            </div>
        </div>
		<input type="submit" value="Simpan Data Karyawan" class="btn btn-primary">
	</form>

@endsection
