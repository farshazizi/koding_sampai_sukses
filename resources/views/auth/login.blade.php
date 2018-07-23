@extends('layouts.app')
 
@section('content')
    <!-- BEGIN JUMBOTRON -->
    <section class="jumbotron demo-custom-height xs-full-height bg-black" data-pages-bg-image="http://128.199.122.47/sipp/assets/landingpage/assets/images/hero_4.jpg">
      <div class="container-xs-height full-height">
        <div class="col-xs-height col-middle text-left">
          <div class="container">
            <div class="col-sm-6">
              <br><br>
              <h1 style="color:#fff; font-weight:bold; font-size:33px; line-height:120%;" class="h1header">Sistem Permohonan SIPP</h1>
              <h4 class="text-white">Surat Izin Praktek Psikologi (SIPP)</h4>
              <p style="color:#fff; " class="m-b-30 pheader">Mengajukan permohonan SIPP kini lebih mudah dan praktis Ayo menjadi Psikolog yang memiliki SIPP Resmi dari HIMPSI Jatim</p>
            </div>
 
            <div style="background: #fff; padding: 25px; padding-bottom: 20px; margin-top: 15px; border-radius:2%;" class="col-sm-5">
                <div id="pagelogin">
                    <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
 
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-default">
                        <label for="email" class="col-md-4 control-label">Email</label>
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required>
 
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
 
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-default">
                        <label for="password" class="col-md-4 control-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
 
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif                        
                    </div>
 
                 
                    <button type="submit" class="btn btn-primary btn-block btn-cons">
                        Login
                    </button>
                  </form>
                  <br>
                  <a href="http://anggota.himpsi.or.id/" target="_blank"><button style="background:#fff; color:purple" class="btn btn-primary btn-block btn-cons">Belum mendaftar akun SIK HIMPSI ?</button></a>
 
                  <br>
                  <center>
                  <a href="#"><p class="text fs-12">Download Panduan Permohonan SIPP (PDF) </p></a>
 
                  <br>
 
                </div>
 
                <div id="pageregister" style="display: none;">
                    <form method="POST" action="http://128.199.122.47/sipp/home/login">
                 
                      <div class="form-group form-group-default ">
                          <label>NIK</label>
                          <input name="nik" type="nik" class="form-control" required>
                      </div>
                      <div class="form-group form-group-default">
                          <label>E-Mail</label>
                          <input name="password" type="password" class="form-control" required>
                      </div>
                      <div class="form-group form-group-default ">
                          <label>Nama</label>
                          <input name="nik" type="nik" class="form-control" required>
                      </div>
                      <div class="form-group form-group-default">
                          <label>No Hp</label>
                          <input name="password" type="password" class="form-control" required>
                      </div>
 
                  <button class="btn btn-primary btn-block btn-cons">Daftar</button>
                  </form>
                  <br>
                  <!-- <a href="http://anggota.himpsi.or.id/" target="_blank"><button style="background:#fff; color:purple" class="btn btn-primary btn-block btn-cons">Belum mendaftar akun SIK HIMPSI ?</button></a> -->
 
                  <button onclick="setpagelogin();" style="background:#fff; color:purple" class="btn btn-primary btn-block btn-cons">Sudah memiliki akun</button>
 
                  <br>
                  <center>
                  <a href="#"><p class="text fs-12">Download Panduan Permohonan SIPP (PDF) </p></a>
 
                  <br>
 
                </div>
 
              </center>
            </div>
 
          </div>
        </div>
      </div>
    </section>
    <!-- END JUMBOTRON -->
 
    <!-- BEGIN CONTENT SECTION -->
 
    <section class="bg-white relative p-b-85 p-t-75 p-b-65 p-t-55">
      <div class="container">
        <div class="md-p-l-20 xs-no-padding clearfix">
          <div class="col-sm-4 no-padding">
            <div class="p-r-40 md-p-r-30 xs-no-padding text-center">
              <img alt="" class="m-b-20" src="http://128.199.122.47/sipp/assets/landingpage/assets/images/legalitas.svg" width="100">
              <h6 style="font-size:14px; font-weight:bold; color:#aaaaff;" class="">Legalitas Praktek Psikologi Resmi</i></h6>
              <p class="m-b-30">Dengan memiliki SIPP, dalam melakukan Praktek Psikologi akan sesuai hukum dan kode etik psikologi di Indonesia</p>
               
            </div>
            <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
          </div>
          <div class="col-sm-4 no-padding">
            <div class="p-r-40 md-p-r-30 xs-no-padding text-center">
              <img alt="" class="m-b-20" src="http://128.199.122.47/sipp/assets/landingpage/assets/images/pro.svg" width="100">
              <h6 style="font-size:14px; font-weight:bold; color:#aaaaff;"  class="">Praktek Psikologi yang lebih Terpercaya</i></h6>
              <p class="m-b-30">Dengan memiliki SIPP, profil sebagai Psikolog akan lebih dipercaya di mata calon klien</p>
            </div>
            <div class="visible-xs b-b b-grey-light m-t-30 m-b-30"></div>
          </div>
          <div class="col-sm-4 no-padding">
            <div class="p-r-40 md-p-r-30  xs-no-padding text-center">
              <img alt="" class="m-b-20" src="http://128.199.122.47/sipp/assets/landingpage/assets/images/psi.svg" width="100">
              <h6 style="font-size:14px; font-weight:bold; color:#aaaaff;"  class="">Praktek Psikologi yang Diakui</i></h6>
              <p class="m-b-30">Dengan memiliki SIPP, HIMPSI akan mengakui praktek Psikologi yang dilakukan di seluruh Indonesia</p>
            </div>
          </div>
        </div>
      </div>
 
 
    </section>
 
    <center>
      <div class="container">
        <div class="p-r-40 md-p-r-30 xs-no-padding text-center">
          <img alt="" class="m-b-20" src="https://image.ibb.co/iOGNu5/ilham_200x300.png" width="150">
          <h6 style="font-size:14px; font-weight:bold; color:#aaaaff;"  class="">Ilham Nur Alfian, M.Psi - Ketua HIMPSI Jawa Timur</i></h6>
          <p class="m-b-30">"Himpsi Jatim bertekad agar  seluruh Psikolog di Jawa Timur dan Indonesia dapat melakukan permohonan SIPP lebih mudah dan praktis melalui Sistem Permohonan SIPP Online. <a href="http://188.166.242.225/sipp/home"> <b>Daftar Sekarang</b></a>"</p>
        </div>
      </div>
 
    </center>
 
    <!-- BEGIN CONTENT SECTION -->
    <section class="p-b-85 p-t-75 no-overflow">
      <div class="container">
        <div class="md-p-l-20 md-p-r-20 xs-no-padding">
          <div class="row">
            <div class="col-sm-7">
              <h2 style="color:#aaaaff;" class="">Ayo menjadi Psikolog yang memiliki SIPP secara Online  </h2>
              <p class="m-b-20"></p>
 
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        6 Tahapan Mudah Mendaftar SIPP?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      1. Mendaftar sebagai anggota Himpsi Wilayah, hingga dikeluarkannya Kartu Tanda Anggota(KTA) <br><br>
                      2. Pemohon Membayar/transfer biaya pembuatan SIPP sesuai ketentuan yang ditetapkan oleh Himpsi Wilayah dan jangan lupa menyimpan bukti pembayaran <br><br>
                      3. Mengisi form permohonan di <a href="http://bit.ly/request_loginSIPP2017"><b>Sistem Permohonan SIPP Online </b></a> <br><br>
                      4. Tim Sekretariat dan Bidang 3 HIMPSI memeriksa kelengkapan berkas yang diajukan, jika memenuhi syarat SIPP pemohon akan melakukan wawancara <br><br>
                      5. Melakukan wawancara sesuai jadwal yang ditetapkan. <br><br>
                      6. Himpsi Wilayah menyerahkan SIPP tersebut kepada pemohon. <br>
                      <br><br>
                      Petunjuk lebih lengkap silahkan <a href="http://jatim.himpsi.or.id/2017/09/04/pengurusan-perpanjangan-surat-ijin-praktik-psikologi-sipp-online-himpsi-jatim/"><b>KLIK DISINI</b></a>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Buku Panduan melakukan permohonan SIPP ?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                      Coming Soon
                      <!-- Berikut adalah E-book panduan permohonan SIPP. Silakan download melalui link berikut. -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="col-sm-5 no-padding xs-p-l-15 xs-p-r-15">
              <div class="content-mask-md">
                <div class="device_morph pull-center-inner">
                  <img alt="" style="margin-top:16px;" class="xs-image-responsive-height image-responsive-width" src="https://preview.ibb.co/jKDVxQ/cads.jpg" width="400">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 
    <center> <p>Dibuat oleh</p> <img src="http://128.199.122.47/sipp/assets/landingpage/assets/images/himpsijatim.png" width="100"></center>  
    <!-- END CONTENT SECTION -->
 
    <!-- START FOOTER -->
    <section class="p-b-30 p-t-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="m-t-10 ">
              <ul class="no-style fs-11 no-padding font-arial">
               
              </ul>
            </div>
          </div>
          <div class="col-sm-6 text-right font-arial sm-text-left">
            <p class="fs-11 muted">Copyright &copy; 2017 <a href="http://riliv.co">Riliv Indonesia.</a>  All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END FOOTER -->  
</html>
@endsection