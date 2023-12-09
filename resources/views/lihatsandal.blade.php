@extends('master2')
@section('judulhalaman','View Sandal')

@section('konten')
<h3 class="text-center">View Sandal</h3>
<div class="container align-center">
    <div class="row bg-light d-flex align-item-center justify-content-center">
        <div class="col-2 d-flex justify-content-center m-3" style="border-style: solid">

        </div>
        <div class="col-8 d-flex flex-column m-3">
            @foreach ($sandal as $p)
            <input type="hidden" name="kodesandal" value="{{ $p->kodesandal }}">
            <p>Kode Sandal : {{ $p->kodesandal }}</p>
            <p>Merk Sandal : {{ $p->merksandal }}</p>
            <p>Stock Sandal : {{ $p->stocksandal }}</p>
            <p>Tersedia : {{ $p->tersedia }}</p>
            <div class="d-flex justify-content-between align-item-center">
                <a href="/sandal" class="btn btn-info">Back</a>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
