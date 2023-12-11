@extends('master2')
@section('judulhalaman','View Karyawan')

@section('konten')
<h3 class="text-center">View Karawan</h3>
<div class="container align-center">
    <div class="row bg-light d-flex align-item-center justify-content-center">
        <div class="col-2 d-flex justify-content-center m-3" style="border-style: solid">

        </div>
        <div class="col-8 d-flex flex-column m-3">
            @foreach ($karyawan as $p)
            <input type="hidden" name="kodepegawai" value="{{ $p->kodepegawai }}">
            <p>Kode Pegawai : {{ $p->kodepegawai }}</p>
            <p>Nama Lengkap : {{ strtoupper($p->namalengkap) }}</p>
            <p>Divisi : {{ $p->divisi }}</p>
            <p>Departemen : {{ strtolower($p->departemen) }}</p>
            <div class="d-flex justify-content-between align-item-center">
                <a href="/karyawan" class="btn btn-info">Back</a>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
