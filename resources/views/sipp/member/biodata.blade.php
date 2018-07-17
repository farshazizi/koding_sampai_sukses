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
    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <a href="/sipp/member">Home</a>
          <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
      </ul>
    </div>
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
              <li class="active"><a data-toggle="tab">Biodata</a>
              </li>
              <li class="disabled"><a class="nav-link disabled">Pembayaran</a>
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
                    {{-- {{ Form::submit('Save to draft', array('class' => 'btn btn-sm', 'style' => 'background-color: orange; color: white')) }} --}}
                    <button type="button" class="btn btn-sm" style="background-color: orange; color: white">Save to draft</button>
                  </li>
                </ul>
              </div>
            </ul>

            <!-- Tab panes -->
            {!! Form::open(['route' => 'biodata.store', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
            {{-- {!! Form::open(array('route' => 'biodata.store')) !!} --}}
            
              <div class="tab-content">
                <div class="tab-pane fade in active" id="biodata">
                  <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    
                    <div class="form-group">
                      <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('email', null, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'purwandari@gmail.com')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lkp">Nama Lengkap<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('nama_lengkap', null, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Purwandari, M.Si.')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="foto" class="control-label col-md-3 col-sm-3 col-xs-12">Pasfoto ukuran 4 x 6<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{-- <input name="pasfoto" id="foto" type="file" class="file" required> --}}
                        {{ Form::file('foto_pas', null, array('class' => 'form-control')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="Tempat-lhr" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{-- <input id="" class="form-control col-md-7 col-xs-12" type="text" name="tempat_lahir" required> --}}
                        {{ Form::text('tempat_lahir', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="Tanggal-lhr" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{-- <input id="tanggal_lahir" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_lahir" required> --}}
                        {{ Form::date('tanggal_lahir', null, array('class' => 'form-control col-md-7 col-xs-12')) }} 
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="agama" class="control-label col-md-3 col-sm-3 col-xs-12">Agama<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::select('agama', ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha', 'Kong Hu cu' => 'Kong Hu cu'], null, array('class' => 'form-control')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            {{ Form::radio('gender', 'Laki-Laki') }} &nbsp; Laki-Laki &nbsp;
                          </label>
                          <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            {{ Form::radio('gender', 'Perempuan') }} Perempuan
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="sts" class="control-label col-md-3 col-sm-3 col-xs-12">Status Menikah<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::select('status_menikah', ['Single' => 'Single', 'Menikah' => 'Menikah'], null, array('class' => 'form-control')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('alamat', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('kota', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="kodepos" class="control-label col-md-3 col-sm-3 col-xs-12">Kodepos<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('kodepos', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="telp" class="control-label col-md-3 col-sm-3 col-xs-12">Telepon<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('telepon', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="no-hp" class="control-label col-md-3 col-sm-3 col-xs-12">Handphone/Whatsapp<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('handphone', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <br>

                    <div class="form-group">
                      <label class="col-md-3 col-sm-3 col-xs-12 control-label">Psikolog dipilih dari pendidikan<span class="required">*</span></label>

                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('pendidikan1', 'Sistem Paket Murni') }} Sistem Paket Murni
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('pendidikan2', 'Sistem Kredit Semester plus Pelatihan Psikodiagnostika') }} Sistem Kredit Semester plus Pelatihan Psikodiagnostika
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('pendidikan3', 'Program S1plus Program Profesi Psikolog') }} Program S1plus Program Profesi Psikolog
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('pendidikan4', 'Program Magister Profesi Psikolog') }} Program Magister Profesi Psikolog
                          </label>
                        </div>
                      </div>
                    </div>

                    <br>

                    <div class="form-group">
                      <label for="foto" class="control-label col-md-3 col-sm-3 col-xs-12">Kartu Tanda Penduduk<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{-- <input name="pasfoto" id="foto" type="file" class="file" required> --}}
                        {{ Form::file('foto_ktp', null, array('class' => 'form-control')) }}
                      </div>
                    </div>

                    <br>

                    <div class="form-group">
                      <label for="foto" class="control-label col-md-3 col-sm-3 col-xs-12">Kartu Tanda Anggota<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{-- <input name="pasfoto" id="foto" type="file" class="file" required> --}}
                        {{ Form::file('foto_kta', null, array('class' => 'form-control')) }}
                      </div>
                    </div>

                    <br>

                    <div class="form-group">
                      <label for="spp/sipp" class="control-label col-md-3 col-sm-3 col-xs-12">Sertifikat Sebutan Psikolog<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::file('sertifikat_sebutan', null, array('class' => 'form-control')) }}
                      </div>
                    </div>

                    <br>

                    <div class="form-group">
                      <label for="spp/sipp" class="control-label col-md-3 col-sm-3 col-xs-12"> Surat Izin Praktek Psikologi<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::file('surat_izin', null, array('class' => 'form-control')) }}
                      </div>
                    </div>

                    <br>

                    <div class="form-group">
                      <label for="praktek" class="control-label col-md-3 col-sm-3 col-xs-12">Praktek Psikologi dalam Bidang <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 col-xs-12">

                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('bidang1', 'Psikologi Perkembangan') }} Psikologi Perkembangan
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('bidang2', 'Psikologi Pendidikan') }} Psikologi Pendidikan
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('bidang3', 'Psikologi Klinis') }} Psikologi Klinis
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('bidang4', 'Psikologi Perusahaan Industri dan Organisasi') }} Psikologi Perusahaan Industri dan Organisasi
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('bidang5', 'Lainnya') }} Lainnya
                          </label>
                        </div>

                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nama-alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Nama tempat praktek<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('nama_praktek', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="nama-alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat tempat praktek<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::text('alamat_praktek', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="alat-tes" class="control-label col-md-3 col-sm-3 col-xs-12">Alat Tes yang Biasa Dipakai<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::textarea('alat_tes', null, array('class' => 'form-control col-md-7 col-xs-12', 'rows' => '5')) }}
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="sifat-praktek" class="control-label col-md-3 col-sm-3 col-xs-12">Praktek Psikologi dilakukan <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="radio">
                          <label>
                            {{ Form::radio('teman_praktek', 'Sendiri') }} Sendiri
                          </label>
                        </div>

                        <div class="radio">
                          <label>
                            {{ Form::radio('teman_praktek', 'Bersama-sama') }} Bersama-sama dengan sejawat psikologi lainnya (Tulis nama lengkap dengan gelar rekan Anda di bawah ini )
                          </label>

                          <div class="form-group">
                            <br>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="divkelompok1">
                                {{ Form::text('teman1', null, array('class' => 'form-control col-md-7 col-xs-12')) }}<br><br>
                              </div>
                              <div id="divkelompok2" style="display: none;">
                                {{ Form::text('teman2', null, array('class' => 'form-control col-md-7 col-xs-12')) }}<br><br>
                              </div>
                              <div id="divkelompok3" style="display: none;">
                                {{ Form::text('teman3', null, array('class' => 'form-control col-md-7 col-xs-12')) }}<br><br>
                              </div>
                              <div id="divkelompok4" style="display: none;">
                                {{ Form::text('teman4', null, array('class' => 'form-control col-md-7 col-xs-12')) }}<br><br>
                              </div>
                              <div id="divkelompok5" style="display: none;">
                                {{ Form::text('teman5', null, array('class' => 'form-control col-md-7 col-xs-12')) }}<br><br>
                              </div>
                              <center>
                                <button id="btntambahrekan" type="button" class="btn btn-primary btn" onclick="tambahRekan();" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Rekan</button>
                              </center>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="klien" class="control-label col-md-3 col-sm-3 col-xs-12">Klien (mayoritas) <span class="required">*</span></label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('klien1', 'Perusahaan') }} Perusahaan
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('klien2', 'Instansi / Lembaga Pemerintahan dan Swasta') }} Instansi / Lembaga Pemerintahan dan Swasta
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('klien3', 'Orang Dewasa') }} Orang Dewasa
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('klien4', 'Remaja') }} Remaja
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('klien5', 'Anak') }} Anak
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            {{ Form::checkbox('klien6', 'Lainnya') }} Lainnya
                          </label>
                        </div>
                      </div>
                    </div>
                    {{-- {!! Form::close() !!} --}}
                    {{-- <div class="box-footer">
                      <center><button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Lanjutkan</button></a></center>
                    </div> --}}

                    <div class="box-footer">
                      <center>
                        {{ Form::submit('Lanjutkan', array('class' => 'btn btn-primary btn-block')) }}
                      </center>
                    </div>

                  </div>
                </div>
              </div>
            {!! Form::close() !!}

            {{-- <form method="POST" action="member/tambahsipp" enctype="multipart/form-data">
              <div class="tab-content">
                <div class="tab-pane fade in active" id="biodata">
                  <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <h4 class="hform">Biodata</h4>
                  </div>

                  <div class="box-footer">
                    <center><button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Lanjutkan</button></a></center>
                  </div>
                  
                </div>
              </div>
            </form> --}}
          </div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
  </div>
  <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@include('sipp/member/_javascript')
@endsection