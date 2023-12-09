@extends('master2')
@section('judulhalaman','Tambah Sandal')

@section('konten')

	<h3>Tambah Sandal</h3>

	<a href="/sandal"> Kembali</a>

	<br/>
	<br/>

	<form action="/sandal/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group row">
            <label for="kodesandal" class="col-sm-1 control-label">Kode Sandal</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="kodesandal" name="kodesandal">
            </div>
        </div> --}}
        <div class="form-group row">
            <label for="merksandal" class="col-md-2 control-label">Merk Sandal</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="merksandal" name="merksandal">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocksandal" class="col-md-2 control-label">Stock Sandal</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="stocksandal" name="stocksandal">
            </div>
        </div>
        {{-- <div class="form-group row">
            <label for="tersedia" class="col-md-2 control-label">Tersedia</label>
            <div class="col-sm-9">
                @php
                // Check if stocksandal is 0
                $stocksandalValue = old('stocksandal') ?? 0; // Use old('stocksandal') to retain form input after submission
                $tersediaValue = $stocksandalValue == 0 ? 'N' : old('tersedia', 'Y');
                $tersediaValue = $stocksandalValue > 0 ? 'Y' : old('tersedia', 'N');
                @endphp
                <select class="form-control" id="tersedia" name="tersedia">
                    <option value="Y">YA</option>
                    <option value="N">TIDAK</option>
                </select>
            </div>
        </div> --}}
		<input type="submit" value="Simpan Data Barang" class="btn btn-primary">
	</form>

@endsection
