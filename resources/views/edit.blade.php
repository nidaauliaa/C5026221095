@extends('master2')
@section('judulhalaman','Edit Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <label for="nama" class="col-sm-1 control-label">Nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 control-label">Jabatan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="Umur" class="col-sm-1 control-label">Umur</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-1 control-label">Alamat</label>
            <div class="col-sm-9">
                <textarea type="text" class="form-control" id="alamat" name="alamat" required="required" >{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
