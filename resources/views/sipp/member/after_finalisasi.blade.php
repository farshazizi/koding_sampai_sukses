@extends('welcome')
@section('content')
<div class="page-sidebar-wrapper">
    @include('sipp/member/_sidebar')
</div>
<div class="page-content-wrapper">
    <div class="page-content">
        <h1 class="page-title">Admin Dashboard</h1>
		<h4>Selamat datang di Sistem Permohonanan SIPP</h4>
		<div class="row">
		    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		        {{-- <a href="/sipp/member/biodata">
		            <div class="dashboard-stat2" style="background-color: #d9d9db; text-align: center;">
		                <img src="{{ asset('/img/icon/plus.png') }}" style="width: 24%; height: auto; margin-top: 5%"><br>
		                <p style="color: black">Buat SIPP Baru</p>
		            </div>
                </a> --}}
                {{-- @if($sta_tah->status_tahapan == 1) --}}
                <a href="/sipp/member/feedback">
                    <div class="dashboard-stat2" style="background-color: #d9d9db; text-align: center;">
                        <img src="{{ asset('/img/icon/reload.png') }}" style="width: 24%; height: auto; margin-top: 5%"><br>
                        <p style="color: black">
                            SIPP dalam tahapan pemrosesan<br>
                            Klik disini untuk melihat seluruh feedback yang telah masuk
                        </p>
                    </div> 
                </a>
		    </div>
		</div>
    </div>
</div>
@endsection