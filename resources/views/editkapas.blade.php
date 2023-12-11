@extends('master2')
@section('judulhalaman','Edit Kapas')

@section('konten')

	<h3>Edit Kapas</h3>

	<a href="/kapas"> Kembali</a>

	<br/>
	<br/>

	@foreach($kapas as $p)
	<form action="/kapas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodekapas }}"> <br/>
        <div class="form-group row">
            <label for="namakapas" class="col-md-2 control-label">Nama Kapas</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="namakapas" name="namakapas" value="{{ $p->namakapas }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-md-2 control-label">Jumlah</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $p->jumlah }}" required="required">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
