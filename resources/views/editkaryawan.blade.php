@extends('master2')
@section('judulhalaman','Edit Karyawan')

@section('konten')

	<h3>Edit Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $p)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodepegawai }}"> <br/>
        <div class="form-group row">
            <label for="kodepegawai" class="col-md-2 control-label">Kode Pegawai</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" value="{{ $p->kodepegawai }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="namalengkap" class="col-md-2 control-label">Nama Lengkap</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="{{ $p->namalengkap }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-md-2 control-label">Divisi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $p->divisi }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="departemen" class="col-md-2 control-label">Departemen</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="departemen" name="departemen" value="{{ $p->departemen }}" required="required">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
