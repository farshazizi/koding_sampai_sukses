@extends('welcome')
@section('content')
<div class="page-sidebar-wrapper">
    @include('sipp/member/_sidebar')
</div>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Feedback 
                    <a href=""><button class="btn btn-primary btn-lg" style="float: right;">Lihat Berkas Pengajuan</button></a>
                </h1>
            </div>
        </div>
		<div class="row">
            <div class="col-lg-12">
                <h4 class="hform"> Daftar Feedback</h4>
                <p> Seluruh Feedback dari Tim Penliai Berkas akan muncul pada tabel berikut.</p>
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Tanggal</center></th>
                                <th><center>Feedback</center></th>
                                <th><center>Penilai</center></th>
                                <th><center>Catatan</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            <tr>
                                <td><center>{{ $i++ }}</center></td>
                                <td>Tanggal</td>
                                <td>Feedback</td>
                                <td>Penilai</center></td>
                                <td><center>Catatan</center></td>
                                <td><center>Aksi</center></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br><br>
                <img src="http://128.199.122.47/sipp/assets/landingpage/assets/images/himpsijatim.png" width="80">
                <p>Untuk informasi dan kendala silakan hubungi Tim Sekretariat melalui :
                <b><br>Chat Customer Service 
                <br>Whatsapp : 0821 4068 3814 
                <br>Email : SIPPHimpsiJatim@gmail.com </b>
                </p>
                <br><br><br><br>
            </div>
		</div>
    </div>
</div>
@endsection