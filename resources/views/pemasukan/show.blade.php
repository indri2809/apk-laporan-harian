@extends('layouts.template')
@section('judulh1', 'Data Pemasukan')

@section('konten')
<div class="container">
    <h1 class="my-4 text-center">Data Pemasukan</h1>

    <!-- Success, Updated, and Deleted Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('updated'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{ session('updated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('deleted'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('deleted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Tambah Data Button Aligned Right -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('pemasukan.create') }}" class="btn btn-success shadow-sm">Tambah Data</a>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Pekerjaan yang Dilakukan</th>
                    <th>Tenaga Kerja</th>
                    <th>Peralatan yang Digunakan</th>
                    <th>Bahan (Diterima/Ditolak)</th>
                    <th>Cuaca</th>
                    <th>Masalah & Pemecahannya</th>
                    <th>Perintah yang Diberikan</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemasukan as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->hari }}</td>
                        <td>{{ $item->pekerjaan_yang_dilakukan }}</td>
                        <td>{{ $item->tenaga_kerja }}</td>
                        <td>{{ $item->peralatan_yang_digunakan }}</td>
                        <td>{{ $item->bahan_diterima_ditolak }}</td>
                        <td>{{ $item->cuaca }}</td>
                        <td>{{ $item->masalah_dan_pemecahannya }}</td>
                        <td>{{ $item->perintah_yang_diberikan }}</td>
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
