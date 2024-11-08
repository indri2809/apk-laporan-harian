@extends('layouts.template')
@section('judulh1', 'Pemasukan')

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
            <h3 class="card-title">Tambah Laporan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('pemasukan.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="">
                </div>
                <div class="form-group">
                    <label for="pelaksanaan">Pelaksanaan</label>
                    <input type="date" class="form-control" id="pelaksanaan" name="pelaksanaan" placeholder="">
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
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
