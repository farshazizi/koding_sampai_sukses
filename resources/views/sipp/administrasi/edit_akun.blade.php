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
        <div id="wrapper">
            <!-- Navigation -->
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Akun</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Akun
                            </div>

                            <div class="panel-body">
                                <form method="POST" action="member/tambahsipp" enctype="multipart/form-data">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="biodata">
                                            <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                                <div class="form-group">
                                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">
                                                        NIK
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input id="email" class="form-control col-md-7 col-xs-12" type="email" name="email" placeholder="1234567890" disabled="true">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lkp">
                                                        Nama Lengkap
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">
                                                        Email
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">
                                                        No HP
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">
                                                        Password Baru
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12" placeholder="Biarkan kosong bila Anda tidak ingin mengubah password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <center>
                                                    <button type="submit" class="btn btn-success btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Simpan Data</button></a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
</div>
<!-- END CONTENT -->
@endsection