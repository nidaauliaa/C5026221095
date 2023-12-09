@extends('master2')
@section('judulhalaman','Edit Sandal')

@section('konten')

	<h3>Edit Sandal</h3>

	<a href="/sandal"> Kembali</a>

	<br/>
	<br/>

	@foreach($sandal as $p)
	<form action="/sandal/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodesandal }}"> <br/>
        <div class="form-group row">
            <label for="merksandal" class="col-md-2 control-label">Merk Sandal</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="merksandal" name="merksandal" value="{{ $p->merksandal }}" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocksandal" class="col-md-2 control-label">Stock Sandal</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="stocksandal" name="stocksandal" value="{{ $p->stocksandal }}" required="required">
            </div>
        </div>
        {{-- <div class="form-group row">
            <label for="tersedia" class="col-md-2 control-label">Tersedia</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="tersedia" name="tersedia" value="{{ $p->tersedia }}" required="required">
            </div>
        </div> --}}
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
