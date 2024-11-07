@extends('layouts.template')
@section('judulh1','pemasukan')

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
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">ubah pemasukan </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('pemasukan.update',$warga->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder=""
                        value="{{$pemasukan->nama}}">
                </div>
                <div class="form-group">
                    <label for="tanggal_pemasukan">Tanggal Pemasukan</label>
                    <input type="text" class="form-control" id="tanggal_pemasukan" name="tanggal_pemasukan" placeholder=""
                        value="{{$pemasukan->tanggal_pemasukan}}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
 <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$pemasukan->keterangan}}">
                </div>

                
            <!-- /.card-body -->


            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Ubah</button>
            </div>
        </form>
    </div>

</div>

@endsection