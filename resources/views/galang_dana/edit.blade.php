@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Galang Dana</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('galangDana.update', $galangDana->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul_502" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul_502" name="judul_502" value="{{ $galangDana->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="lembaga_502" class="form-label">Lembaga</label>
            <input type="text" class="form-control" id="lembaga_502" name="lembaga_502" value="{{ $galangDana->lembaga }}" required>
        </div>
        <div class="mb-3">
            <label for="akun_502" class="form-label">Akun</label>
            <input type="text" class="form-control" id="akun_502" name="akun_502" value="{{ $galangDana->akun }}" required>
        </div>
        <div class="mb-3">
            <label for="nominal_502" class="form-label">Nominal</label>
            <input type="number" class="form-control" id="nominal_502" name="nominal_502" value="{{ $galangDana->nominal }}" required>
        </div>
        <div class="mb-3">
            <label for="tujuan_502" class="form-label">Tujuan</label>
            <input type="text" class="form-control" id="tujuan_502" name="tujuan_502" value="{{ $galangDana->tujuan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
