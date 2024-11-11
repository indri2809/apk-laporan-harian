@extends('layouts.template')
@section('judulh1',)

@section('konten')
<div class="container">
    <h1 class="my-4 text-center"></h1>

    <!-- Success, Updated, and Deleted Messages -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('updated'))
        <div class="alert alert-info">
            {{ session('updated') }}
        </div>
    @endif

    @if(session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
    @endif

    <!-- Tambah Data Button Aligned Right -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('pemasukan.create') }}" class="btn btn-success shadow-sm">Tambah Data</a>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Pekerjaan</th>
                    <th>Pelaksanaan</th>
                    <th>Lokasi</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemasukan as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->pekerjaan }}</td>
                        <td>{{ $item->pelaksanaan }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td class="text-center">
                            @if($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" class="img-thumbnail" width="100" alt="Foto">
                            @else
                                <span class="text-muted">No image</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
