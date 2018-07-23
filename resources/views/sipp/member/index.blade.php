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
        <h1 class="page-title">Admin Dashboard</h1>
		<h4>Selamat datang di Sistem Permohonanan SIPP</h4>
		<div class="row">
		    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		        <a href="/sipp/member/biodata">
		            <div class="dashboard-stat2" style="background-color: #d9d9db; text-align: center;">
		                <img src="{{ asset('/img/icon/plus.png') }}" style="width: 24%; height: auto; margin-top: 5%"><br>
		                <p style="color: black">Buat SIPP Baru</p>
		            </div>
                </a>
                {{-- @if($sta_tah->status_tahapan == 1) --}}
                    {{-- <a href="{{ route()}}">
                        <div class="dashboard-stat2" style="background-color: #d9d9db; text-align: center;">
                            <img src="{{ asset('/img/icon/reload.png') }}" style="width: 24%; height: auto; margin-top: 5%"><br>
                            <p style="color: black">
                                SIPP dalam tahapan pemrosesan<br>
                                Klik disini untuk melihat seluruh feedback yang telah masuk
                            </p>
                        </div> 
                    </a> --}}
                {{-- @endif --}}
		    </div>
		</div>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection