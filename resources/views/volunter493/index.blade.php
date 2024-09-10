@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Data Volunteer</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('form.volunteer493') }}" class="btn btn-primary">Tambah Data</a>
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Alamat Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $volunteer)
                <tr>
                    <td>{{ $volunteer->id }}</td>
                    <td>{{ $volunteer->nama_lengkap }}</td>
                    <td>{{ $volunteer->jenis_kelamin }}</td>
                    <td>{{ $volunteer->alamat }}</td>
                    <td>{{ $volunteer->alamat_email }}</td>
                    <td class="d-flex">
                        <a href="{{ route('volunteer493.edit', $volunteer->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                        <form action="{{ route('volunteer493.destroy', $volunteer->id) }}" method="POST" class="d-inline">
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
