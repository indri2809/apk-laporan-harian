@extends('layouts.template')
@section('judulh1', 'Profil')
@section('konten') 
<div class="col-lg-12">
    <div class="card">
        <div class="card-header border-0">        
            <div class="d-flex justify-content-between">
                <h3 class="card-title">
            </div>
        </div>
        <div class="card-body">
            <div class="dashboard-image text-center">
                <img src="{{ asset('dist/img/Keuangan Daerah.jpg') }}" class="img-fluid mb-4" alt="Keuangan Daerah" />
                <p class="mt-2">
                    Manajemen keuangan merupakan kegiatan yang mencakup perencanaan, penganggaran, pemeriksaan, pengelolaan, pengendalian, pencarian, dan penyimpanan dana yang dimiliki oleh perusahaan. Demi kelancaran dan keberlangsungan bisnis dalam jangka waktu lama, diperlukan manajemen keuangan yang dilakukan secara matang.
                </p>
                <h5 class="mt-4">Fungsi Manajemen Keuangan:</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle"></i> Mengelola keuangan perusahaan</li>
                    <li><i class="fas fa-check-circle"></i> Mengendalikan keuangan perusahaan</li>
                    <li><i class="fas fa-check-circle"></i> Memeriksa keuangan perusahaan</li>
                    <li><i class="fas fa-check-circle"></i> Melaporkan keuangan perusahaan</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
