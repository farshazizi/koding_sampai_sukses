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
                <li class="active"><a data-toggle="tab">Pembayaran</a>
                </li>
                <li class="disabled"><a class="nav-link disabled">Pendidikan - Karir</a>
                </li>
                <li class="disabled"><a class="nav-link disabled">Portofolio Kasus</a>
                </li>
                <li class="disabled"><a class="nav-link disabled">Pengembangan Professional</a>
                </li>
                <li class="disabled"><a class="nav-link disabled">Finalisasi</a>
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
              {!! Form::open(['route' => ['biodata.update', $m_biodata->id_user], 'method' => 'PUT', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="pembayaran">
                    <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <h4 class="hform"> Konfirmasi Bukti Pembayaran </h4>
                        <p>Silakan lakukan upload bukti pembayaran SIPP</p><br>
                        <div class="form-group">
                          <label for="spp/sipp" class="control-label col-md-3 col-sm-3 col-xs-12">Foto Bukti Transfer/Pembayaran Pendaftaran SIPP<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::file('bukti_iuran_sipp', null, array('class' => 'form-control', 'required' => '')) }} Max File 100kb<br>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="spp/sipp" class="control-label col-md-3 col-sm-3 col-xs-12">Foto Bukti Iuran Lunas HIMPSI<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::file('bukti_pembayaran_sipp', null, array('class' => 'form-control', 'required' => '')) }} Max File 100kb<br>
                          </div>
                        </div>
                    </div>
                    <hr>
                    
                    <div class="box-footer">
                      <div class="col-lg-6"><a href="/sipp/member/biodata" data-toggle="tab"><button type="button" class="btn btn-primary btn-block" onclick="backwardPembayaran(2);" data-toggle="modal" data-target=".bs-example-modal-lg">Kembali</button></a></div>
                      <div class="col-lg-6">
                        {{ Form::submit('Lanjutkan', array('class' => 'btn btn-primary btn-block')) }}
                      </div>

                    </div>
                  </div>
                </div>
              {{ Form::close() }}
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