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
            <h3 class="card-title">ubah laporan </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('pemasukan.update',$pemasukan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="pekerjaan">pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder=""
                        value="{{$pemasukan->pekerjaan}}">
                </div>
                <div class="form-group">
                    <label for="pelaksanaan">pelaksanaan</label>
                    <input type="text" class="form-control" id="pelaksanaan" name="pelaksanaan" placeholder=""
                        value="{{$pemasukan->pelaksanaan}}">
                </div>
                <div class="form-group">
                    <label for="lokasi">lokasi</label>
 <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{$pemasukan->lokasi}}">
                </div>

                
            <!-- /.card-body -->


            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Ubah</button>
            </div>
        </form>
    </div>

</div>

@endsection