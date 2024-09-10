@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Data Pengajuan Galang Dana</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- Button to go to the create form -->
    <a href="{{ route('form.galangdana') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Lembaga</th>
                <th>Akun</th>
                <th>Nominal</th>
                <th>Tujuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $galangDana)
                <tr>
                    <td>{{ $galangDana->id }}</td>
                    <td>{{ $galangDana->judul }}</td>
                    <td>{{ $galangDana->lembaga }}</td>
                    <td>{{ $galangDana->akun }}</td>
                    <td>{{ $galangDana->nominal }}</td>
                    <td>{{ $galangDana->tujuan }}</td>
                    <td>
                        <a href="{{ route('galangDana.edit', $galangDana->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('galangDana.destroy', $galangDana->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $data->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
