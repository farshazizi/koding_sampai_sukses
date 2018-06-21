@extends('welcome')
@section('content')
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    @include('sipp/tim_bidang3/_sidebar')
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
        <div id="wrapper">
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
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10 Juni 2018</td>
                            <td>A</td>
                            <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah Berkas</button>
                                <button type="button" class="btn btn-primary">Cek Berkas</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>10 Juni 2018</td>
                            <td>A</td>
                            <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah Berkas</button>
                                <button type="button" class="btn btn-primary">Cek Berkas</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>10 Juni 2018</td>
                            <td>A</td>
                            <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah Berkas</button>
                                <button type="button" class="btn btn-primary">Cek Berkas</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>10 Juni 2018</td>
                            <td>A</td>
                            <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah Berkas</button>
                                <button type="button" class="btn btn-primary">Cek Berkas</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>10 Juni 2018</td>
                            <td>A</td>
                            <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                            <td>
                                <button type="button" class="btn btn-primary">Ubah Berkas</button>
                                <button type="button" class="btn btn-primary">Cek Berkas</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
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