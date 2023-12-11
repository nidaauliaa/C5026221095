@extends('master2')
@section('judulhalaman','Data Kapas')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Kapas</h3>

	<a href="/kapas"> Kembali</a>

	<br/>
	<br/>

	<form action="/kapas/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group row">
            <label for="kodekapas" class="col-sm-1 control-label">Kode Kapas</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="kodekapas" name="kodekapas">
            </div>
        </div> --}}
        <div class="form-group row">
            <label for="namakapas" class="col-sm-1 control-label">Nama Kapas</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="namakapas" name="namakapas">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-1 control-label">Jumlah</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
