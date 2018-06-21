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
                            <tr>
                                <td>1</td>
                                <td>A</td>
                                <td><button type="button" class="btn btn-primary">Foto</button></td>
                                <td><button type="button" class="btn btn-primary">KTP</button></td>
                                <td><button type="button" class="btn btn-primary">KTA</button></td>
                                <td><button type="button" class="btn btn-primary">Sertifikat Sebutan</button></td>
                                <td><button type="button" class="btn btn-primary">Surat Izin</button></td>
                                <td><button type="button" class="btn btn-primary">Biaya Iuran</button></td>
                                <td><button type="button" class="btn btn-primary">Biaya Pendaftaran</button></td>
                                <td><button type="button" class="btn btn-primary">Lihat</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>A</td>
                                <td><button type="button" class="btn btn-primary">Foto</button></td>
                                <td><button type="button" class="btn btn-primary">KTP</button></td>
                                <td><button type="button" class="btn btn-primary">KTA</button></td>
                                <td><button type="button" class="btn btn-primary">Sertifikat Sebutan</button></td>
                                <td><button type="button" class="btn btn-primary">Surat Izin</button></td>
                                <td><button type="button" class="btn btn-primary">Biaya Iuran</button></td>
                                <td><button type="button" class="btn btn-primary">Biaya Pendaftaran</button></td>
                                <td><button type="button" class="btn btn-primary">Lihat</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>A</td>
                                <td><button type="button" class="btn btn-primary">Foto</button></td>
                                <td><button type="button" class="btn btn-primary">KTP</button></td>
                                <td><button type="button" class="btn btn-primary">KTA</button></td>
                                <td><button type="button" class="btn btn-primary">Sertifikat Sebutan</button></td>
                                <td><button type="button" class="btn btn-primary">Surat Izin</button></td>
                                <td><button type="button" class="btn btn-primary">Biaya Iuran</button></td>
                                <td><button type="button" class="btn btn-primary">Biaya Pendaftaran</button></td>
                                <td><button type="button" class="btn btn-primary">Lihat</button></td>
                            </tr>
                        </tbody>
                        <tfoot>
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
                        </tfoot>
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