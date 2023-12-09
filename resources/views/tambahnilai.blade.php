@extends('master2')
@section('judulhalaman','Tambah Nilai')

@section('konten')

	<h3>Tambah Nilai</h3>

	<a href="/nilai"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilai/store2" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nrp" class="col-md-2 control-label">NRP</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilaiangka" class="col-md-2 control-label">Nilai Angka</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="nilaiangka" name="nilaiangka">
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-md-2 control-label">SKS</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="sks" name="sks">
            </div>
        </div>
		<input type="submit" value="Simpan Data Barang" class="btn btn-primary">
	</form>

@endsection
