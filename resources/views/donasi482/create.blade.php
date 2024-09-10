@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Form Donasi</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('donasi482.index') }}" class="btn btn-secondary mb-3">Lihat Data</a>
    <form action="{{ route('donasi482.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nomor">Nomor</label>
        <input type="text" name="nomor" id="nomor" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jenis_donasi">Jenis Donasi</label>
        <input type="text" name="jenis_donasi" id="jenis_donasi" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jumlah_donasi">Jumlah Donasi</label>
        <input type="number" name="jumlah_donasi" id="jumlah_donasi" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
