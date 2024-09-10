@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Donasi</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('donasi482.update', $donasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $donasi->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor</label>
            <input type="text" class="form-control" id="nomor" name="nomor" value="{{ $donasi->nomor }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis_donasi" class="form-label">Jenis Donasi</label>
            <input type="text" class="form-control" id="jenis_donasi" name="jenis_donasi" value="{{ $donasi->jenis_donasi }}" required>
        </div>
        <div class="mb-3">
            <label for="jumlah_donasi" class="form-label">Jumlah Donasi</label>
            <input type="number" class="form-control" id="jumlah_donasi" name="jumlah_donasi" value="{{ $donasi->jumlah_donasi }}" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan">{{ $donasi->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
