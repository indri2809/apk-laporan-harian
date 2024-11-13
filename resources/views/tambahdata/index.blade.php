@extends('layouts.template')
@section('tambahanCSS')
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Toastr -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<style>
    .table-action-buttons .btn {
        padding: 5px 10px;
        font-size: 14px;
    }
</style>
@endsection



@section('konten')
<div class="col-md-12">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"></h2>
            <a type="button" class="btn btn-success float-right" href="{{ route('tambahdata.create') }}">
                <i class="fas fa-plus"></i> Tamah data
            </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Pekerjaan yang di lakukan</th>
                        <th>Tenaga kerja</th>
                        <th>Peralatan yang digunakan</th>
                        <th>Bahan diterima dan ditolak</th>
                        <th>cuaca</th>
                        <th>masalah dan pemecahan</th>
                        <th>Perintah yang diberikan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tambahdata as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->hari }}</td>
                        <td>{{ $dt->pekerjaan_yang_dilakukan }}</td>
                        <td>{{ $dt->tenaga_kerja }}</td>
                        <td>{{ $dt->peralatan_yang_digunakan }}</td>
                        <td>{{ $dt->bahan_diterima_ditolak }}</td>
                        <td>{{ $dt->cuaca }}</td>
                        <td>{{ $dt->masalah_dan_pemecahan }}</td>
                        <td>{{ $dt->perintah_yang_diberikan }}</td>
                        <td>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('tambahanJS')
<!-- DataTables & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@endsection

@section('tambahScript')
<script>
$(function() {
    $("#example1").DataTable({
        "paging":true,
        "responsive": false,
        "lengthChange": true,
        "scrollX":true,
        "autoWidth": false,
        "fixedColumns":{
            leftColumns:2
        },
        
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});

@if($message = Session::get('success'))
toastr.success("{{ $message }}");
@elseif($message = Session::get('updated'))
toastr.warning("{{ $message }}");
@elseif($message = Session::get('deleted'))
toastr.error("{{ $message }}");
@endif
</script>
@endsection
