@extends('welcome')
@section('content')
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    @include('sipp/administrasi/_sidebar')
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        {{-- <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div> --}}
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        {{-- <div id="wrapper"> --}}
        <!-- Navigation -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Pemohon SIPP</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Pas Foto</th>
                                <th>Foto KTP</th>
                                <th>Foto KTA</th>
                                <th>Sertifikat Sebutan</th>
                                <th>Surat Izin</th>
                                <th>Pembayaran Iuran</th>
                                <th>Pembayaran Pendaftaran</th>
                                <th>Berkas Bidang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($halo as $halo)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $halo->nama_lengkap }}</td>
                                <td>
                                    {{-- <button type="button" class="btn btn-primary">Foto</button> --}}
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Foto
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {{ $halo->foto_pas }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><button type="button" class="btn btn-primary">KTP</button></td>
                                <td><button type="button" class="btn btn-primary">KTA</button></td>
                                <td><button type="button" class="btn btn-primary">Sertifikat Sebutan</button></td>
                                <td><button type="button" class="btn btn-primary">Surat Izin</button></td>
                                <td><button type="button" class="btn btn-primary">Biaya Iuran</button></td>
                                <td><button type="button" class="btn btn-primary">Biaya Pendaftaran</button></td>
                                <td><button type="button" class="btn btn-primary">Lihat</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection