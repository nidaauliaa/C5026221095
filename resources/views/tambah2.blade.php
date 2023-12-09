@extends('master2')
@section('judulhalaman','Tambah Barang')

@section('konten')

	<h3>Tambah Barang</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store2" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-md-2 control-label">Kode Barang</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-md-2 control-label">Jumlah Pembelian</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-md-2 control-label">Harga PerItem</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="Harga" name="Harga">
            </div>
        </div>
		<input type="submit" value="Simpan Data Barang" class="btn btn-primary">
	</form>

@endsection
