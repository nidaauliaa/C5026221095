@extends('master2')
@section('judulhalaman','View Kapas')

@section('konten')
<h3 class="text-center">View Kapas</h3>
<div class="container align-center">
    <div class="row bg-light d-flex align-item-center justify-content-center">
        <div class="col-2 d-flex justify-content-center m-3" style="border-style: solid">

        </div>
        <div class="col-8 d-flex flex-column m-3">
            @foreach ($kapas as $p)
            <input type="hidden" name="id" value="{{ $p->kodekapas }}">
            <p>Kode Kapas : {{ $p->kodekapas }}</p>
            <p>Nama Kapas : {{ $p->kodekapas }}</p>
            <p>Jumlah : {{ $p->jumlah }}</p>
            <div class="d-flex justify-content-between align-item-center">
                <a href="/kapas" class="btn btn-info">Back</a>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
