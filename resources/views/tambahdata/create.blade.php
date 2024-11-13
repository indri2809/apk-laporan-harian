@extends('layouts.template')
@section('judulh1',)
@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('tambahdata.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="hari">Hari</label>
                    <input type="text" class="form-control" id="hari" name="hari" placeholder="">
                </div>
                <div class="form-group">
                    <label for="pekerjaan_yang_dilakukan">Pekerjaan yang dilakukan</label>
                    <input type="text" class="form-control" id="pekerjaan_yang_dilakukan" name="pekerjaan_yang_dilakukan">
                </div>
                <div class="form-group">
                    <label for="tenaga_kerja">Tenaga kerja</label>
                    <input type="text" class="form-control" id="tenaga_kerja" name="tenaga_kerja">
                </div>
                <div class="form-group">
                    <label for="peralatan_yang_digunakan">Peralatan yang digunakan</label>
                    <input type="text" class="form-control" id="peralatan_yang_digunakan" name="peralatan_yang_digunakan">
                </div>
                <div class="form-group">
                    <label for="bahan_diterima_ditolak">Bahan diterima/ditolak</label>
                    <input type="text" class="form-control" id="bahan_diterima_ditolak" name="bahan_diterima_ditolak">
                </div>
                <div class="form-group">
                    <label for="cuaca">cuaca</label>
                    <input type="text" class="form-control" id="cuaca" name="cuaca">
                </div>
                <div class="form-group">
                    <label for="masalah_dan_pemecahan">masalah dan pemecahan</label>
                    <input type="text" class="form-control" id="masalah_dan_pemecahan" name="masalah_dan_pemecahan">
                </div>
                <div class="form-group">
                    <label for="perintah_yang_diberikan">perintah yang diberikan</label>
                    <input type="text" class="form-control" id="perintah_yang_diberikan" name="perintah_yang_diberikan">
                </div>
                
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
