@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Data Donasi</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('form.donasi482') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Jenis Donasi</th>
                <th>Jumlah Donasi</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $donasi)
                <tr>
                    <td>{{ $donasi->id }}</td>
                    <td>{{ $donasi->nama }}</td>
                    <td>{{ $donasi->nomor }}</td>
                    <td>{{ $donasi->jenis_donasi }}</td>
                    <td>{{ $donasi->jumlah_donasi }}</td>
                    <td>{{ $donasi->keterangan }}</td>
                    <td>
                        <a href="{{ route('donasi482.edit', $donasi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('donasi482.destroy', $donasi->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links('pagination::bootstrap-5') }}
</div>
@endsection
