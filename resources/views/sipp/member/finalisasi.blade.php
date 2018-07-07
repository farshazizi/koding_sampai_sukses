@extends('welcome')
@section('content')
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    @include('sipp/member/_sidebar')
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
      <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Formulir Pendaftaran
                </div>
                <!-- /.panel-heading -->

                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="disabled"><a class="nav-link disabled">Biodata</a>
                        </li>
                        <li class="disabled"><a class="nav-link disabled">Pembayaran</a>
                        </li>
                        <li class="disabled"><a class="nav-link disabled">Pendidikan - Karir</a>
                        </li>
                        <li class="disabled"><a class="nav-link disabled">Portofolio Kasus</a>
                        </li>
                        <li class="disabled"><a class="nav-link disabled">Pengembangan Professional</a>
                        </li>
                        <li class="active"><a data-toggle="tab">Finalisasi</a>
                        </li>
                        <div class="top-menu">
                          <ul class="nav navbar-nav pull-right">
                              <li class="dropdown dropdown-quick-sidebar-toggler">
                                <button type="button" class="btn btn-sm" style="background-color: orange; color: white">Save to draft</button>
                              </li>
                          </ul>
                        </div>
                    </ul>

                    <!-- Tab panes -->
                    <form method="POST" action="member/tambahsipp">
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="final">
                        <h4 class="hform"> Mengirim Berkas</h4>
                        <p style="color: red"> Mohon periksa kembali isian berkas permohonan SIPP Anda, apabila sudah yakin silakan klik tombol “Kirim Berkas” untuk mengirim berkas kepada Admin Tim Penerbit SIPP</p>
                        <div style="float:right;">
                          &nbsp;
                          <a href="#peng-pro" data-toggle="tab"><button type="button" class="btn btn-primary btn-lg" onclick="backwardPembayaran(6);" data-toggle="modal" data-target=".bs-example-modal-lg">Kembali</button></a>
                          <button onclick="loadingUpload();" type="submit" name="submitberkas" class="btn btn-primary btn-lg">Kirim Berkas</button>
                        </div>
                        <br><br><br>
                      </div>
                    </div>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
      <!-- END PAGE TITLE-->
      <!-- END PAGE HEADER-->
  </div>
  <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@include('sipp/member/_javascript')
@endsection