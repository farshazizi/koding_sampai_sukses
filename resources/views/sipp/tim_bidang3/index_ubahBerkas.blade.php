@extends('welcome')
@section('content')
<style>
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<div class="page-sidebar-wrapper">
  @include('sipp/member/_sidebar')
</div>
<div class="page-content-wrapper">
  <div class="page-content">
    <h1 class="page-title">Pemeriksaan Form SIPP</h1>

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Formulir Permohonan SIPP
          </div>

          <div class="panel-body">
            <ul class="nav nav-tabs">
              <li class="active tablinks"><a data-toggle="tab" onclick="openCity(event, 'Biodata')" id="defaultOpen">Biodata</a></li>
              <li class="tablinks"><a data-toggle="tab"  onclick="openCity(event, 'Pembayaran')">Pembayaran</a></li>
              <li class="tablinks"><a data-toggle="tab"  onclick="openCity(event, 'PendidikanKarir')">Pendidikan - Karir</a></li>
              <li class="tablinks"><a data-toggle="tab"  onclick="openCity(event, 'PortofolioKasus')">Portofolio Kasus</a></li>
              <li class="tablinks"><a data-toggle="tab"  onclick="openCity(event, 'PengembanganProfessional')">Pengembangan Professional</a></li>
              <li class="tablinks"><a data-toggle="tab"  onclick="openCity(event, 'Feedback')">Feedback</a></li>

              <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                  <li class="dropdown dropdown-quick-sidebar-toggler">
                    <button type="button" class="btn btn-sm" style="background-color: orange; color: white">Save to draft</button>
                  </li>
                </ul>
              </div>
            </ul>

            {{-- <div class="tab-content"> --}}
              <div id="Biodata" class="tabcontent">
                <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  @foreach($halo as $halo)
                  <div class="form-group">
                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('email', $halo->email, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lkp">Nama Lengkap<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('nama_lengkap', $halo->nama_lengkap, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="foto" class="control-label col-md-3 col-sm-3 col-xs-12">Pasfoto ukuran 4 x 6<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- <input name="pasfoto" id="foto" type="file" class="file" required> --}}
                      {{-- {{ Form::file('foto_pas', null, array('class' => 'form-control')) }} --}}
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#foto">Lihat Pas Foto</button>
                          <div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                   <img src="{{ asset('/images/foto_pas/' . $halo->foto_pas) }}" style="width: 75%; height: 50%">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Tempat-lhr" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- <input id="" class="form-control col-md-7 col-xs-12" type="text" name="tempat_lahir" required> --}}
                      {{ Form::text('tempat_lahir', $halo->tempat_lahir, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Tanggal-lhr" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- <input id="tanggal_lahir" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_lahir" required> --}}
                      {{ Form::date('tanggal_lahir', $halo->tanggal_lahir, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }} 
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="agama" class="control-label col-md-3 col-sm-3 col-xs-12">Agama<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::select('agama', ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha', 'Kong Hu cu' => 'Kong Hu cu'], $halo->agama, array('class' => 'form-control', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div id="gender" class="btn-group" data-toggle="buttons">
                        {{-- <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default"> --}}
                          {{-- {{ Form::radio('gender', 'Laki-Laki') }} &nbsp; Laki-Laki &nbsp; --}}
                          <input type="radio" name="gender" value="Laki-Laki" @if($halo->gender=="Laki-Laki") checked="true" @endif disabled="true">&nbsp; Laki-Laki &nbsp;</input>
                        {{-- </label> --}}
                        {{-- <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default"> --}}
                          {{-- {{ Form::radio('gender', 'Perempuan') }} Perempuan --}}
                          <input type="radio" name="gender" value="Perempuan" @if($halo->gender=="Perempuan") checked="true" @endif disabled="true">Perempuan</input>
                        {{-- </label> --}}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sts" class="control-label col-md-3 col-sm-3 col-xs-12">Status Menikah<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::select('status_menikah', ['Single' => 'Single', 'Menikah' => 'Menikah'], $halo->status_menikah, array('class' => 'form-control', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('alamat', $halo->alamat, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('kota', $halo->kota, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kodepos" class="control-label col-md-3 col-sm-3 col-xs-12">Kodepos<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('kodepos', $halo->kodepos, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="telp" class="control-label col-md-3 col-sm-3 col-xs-12">Telepon<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('telepon', $halo->telepon, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="no-hp" class="control-label col-md-3 col-sm-3 col-xs-12">Handphone/Whatsapp<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('handphone', $halo->handphone, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Psikolog dipilih dari pendidikan<span class="required">*</span></label>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('pendidikan1', 'Sistem Paket Murni') }} Sistem Paket Murni --}}
                          <input type="checkbox" name="pendidikan1" value="Sistem Paket Murni" @if($halo->pendidikan1=="Sistem Paket Murni") checked="true" @endif disabled="true">Sistem Paket Murni
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('pendidikan2', 'Sistem Kredit Semester plus Pelatihan Psikodiagnostika') }} Sistem Kredit Semester plus Pelatihan Psikodiagnostika --}}
                          <input type="checkbox" name="pendidikan2" value="Sistem Kredit Semester plus Pelatihan Psikodiagnostika" @if($halo->pendidikan2=="Sistem Kredit Semester plus Pelatihan Psikodiagnostika") checked="true" @endif disabled="true">Sistem Kredit Semester plus Pelatihan Psikodiagnostika
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('pendidikan3', 'Program S1plus Program Profesi Psikolog') }} Program S1plus Program Profesi Psikolog --}}
                          <input type="checkbox" name="pendidikan3" value="Program S1plus Program Profesi Psikolog" @if($halo->pendidikan3=="Program S1plus Program Profesi Psikolog") checked="true" @endif disabled="true">Program S1plus Program Profesi Psikolog
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('pendidikan4', 'Program Magister Profesi Psikolog') }} Program Magister Profesi Psikolog --}}
                          <input type="checkbox" name="pendidikan4" value="Program Magister Profesi Psikolog" @if($halo->pendidikan4=="Program Magister Profesi Psikolog") checked="true" @endif disabled="true">Program Magister Profesi Psikolog
                        </label>
                      </div>
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                    <label for="foto" class="control-label col-md-3 col-sm-3 col-xs-12">Kartu Tanda Penduduk<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- <input name="pasfoto" id="foto" type="file" class="file" required> --}}
                      {{-- {{ Form::file('foto_ktp', null, array('class' => 'form-control')) }} --}}
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ktp">Lihat Kartu Tanda Penduduk</button>
                          <div class="modal fade" id="ktp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                   <img src="{{ asset('/images/foto_ktp/' . $halo->foto_ktp) }}" style="width: 75%; height: 50%">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                    <label for="foto" class="control-label col-md-3 col-sm-3 col-xs-12">Kartu Tanda Anggota<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- <input name="pasfoto" id="foto" type="file" class="file" required> --}}
                      {{-- {{ Form::file('foto_kta', null, array('class' => 'form-control')) }} --}}
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kta">Lihat Kartu Tanda Anggota</button>
                          <div class="modal fade" id="kta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                   <img src="{{ asset('/images/foto_kta/' . $halo->foto_kta) }}" style="width: 75%; height: 50%">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                    <label for="spp/sipp" class="control-label col-md-3 col-sm-3 col-xs-12">Sertifikat Sebutan Psikolog<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- {{ Form::file('sertifikat_sebutan', null, array('class' => 'form-control')) }} --}}
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sertifikat_sebutan">Lihat Sertifikat Sebutan Psikolog</button>
                          <div class="modal fade" id="sertifikat_sebutan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                   <img src="{{ asset('/images/sertifikat_sebutan/' . $halo->sertifikat_sebutan) }}" style="width: 75%; height: 50%">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                    <label for="spp/sipp" class="control-label col-md-3 col-sm-3 col-xs-12"> Surat Izin Praktek Psikologi<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- {{ Form::file('surat_izin', null, array('class' => 'form-control')) }} --}}
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#surat_izin">Lihat Surat Izin Praktik</button>
                          <div class="modal fade" id="surat_izin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                   <img src="{{ asset('/images/surat_izin/' . $halo->surat_izin) }}" style="width: 75%; height: 50%">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  </div>

                  <br>

                  <div class="form-group">
                    <label for="praktek" class="control-label col-md-3 col-sm-3 col-xs-12">Praktek Psikologi dalam Bidang <span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('bidang1', 'Psikologi Perkembangan') }} Psikologi Perkembangan --}}
                          <input type="checkbox" name="bidang1" value="Psikologi Perkembangan" @if($halo->bidang1=="Psikologi Perkembangan") checked="true" @endif disabled="true">Psikologi Perkembangan
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('bidang2', 'Psikologi Pendidikan') }} Psikologi Pendidikan --}}
                          <input type="checkbox" name="bidang2" value="Psikologi Pendidikan" @if($halo->bidang2=="Psikologi Pendidikan") checked="true" @endif disabled="true">Psikologi Pendidikan
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('bidang3', 'Psikologi Klinis') }} Psikologi Klinis --}}
                          <input type="checkbox" name="bidang3" value="Psikologi Klinis" @if($halo->bidang3=="Psikologi Klinis") checked="true" @endif disabled="true">Psikologi Klinis
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('bidang4', 'Psikologi Perusahaan Industri dan Organisasi') }} Psikologi Perusahaan Industri dan Organisasi --}}
                          <input type="checkbox" name="bidang4" value="Psikologi Perusahaan Industri dan Organisasi" @if($halo->bidang4=="Psikologi Perusahaan Industri dan Organisasi") checked="true" @endif disabled="true">Psikologi Perusahaan Industri dan Organisasi
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('bidang5', 'Lainnya') }} Lainnya --}}
                          <input type="checkbox" name="bidang5" value="Lainnya" @if($halo->bidang5=="Lainnya") checked="true" @endif disabled="true">Lainnya
                        </label>
                      </div>

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama-alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Nama tempat praktek<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('nama_praktek', $halo->nama_praktek, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama-alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat tempat praktek<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('alamat_praktek', $halo->alamat_praktek, array('class' => 'form-control col-md-7 col-xs-12', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alat-tes" class="control-label col-md-3 col-sm-3 col-xs-12">Alat Tes yang Biasa Dipakai<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::textarea('alat_tes', $halo->alat_tes, array('class' => 'form-control col-md-7 col-xs-12', 'rows' => '5', 'disabled')) }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sifat-praktek" class="control-label col-md-3 col-sm-3 col-xs-12">Praktek Psikologi dilakukan <span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div class="radio">
                        <label>
                          {{-- {{ Form::radio('teman_praktek', 'Sendiri') }} Sendiri --}}
                          <input type="radio" name="teman_praktek" value="Sendiri" @if($halo->teman_praktek=="Sendiri") checked="true" @endif>Sendiri
                        </label>
                      </div>

                      <div class="radio">
                        <label>
                          {{-- {{ Form::radio('teman_praktek', 'Bersama-sama') }} Bersama-sama dengan sejawat psikologi lainnya (Tulis nama lengkap dengan gelar rekan Anda di bawah ini ) --}}
                          <input type="radio" name="teman_praktek" value="Bersama-sama dengan sejawat psikologi lainnya (Tulis nama lengkap dengan gelar rekan Anda di bawah ini )" @if($halo->teman_praktek=="Bersama-sama dengan sejawat psikologi lainnya (Tulis nama lengkap dengan gelar rekan Anda di bawah ini )") checked="true" @endif disabled="true">Bersama-sama dengan sejawat psikologi lainnya (Tulis nama lengkap dengan gelar rekan Anda di bawah ini )

                        </label>

                        <div class="form-group">
                          <br>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="divkelompok1">
                              {{ Form::text('teman1', $halo->teman1, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Tuliskan pertama teman anda', 'disabled')) }}<br><br>
                            </div>
                            <div id="divkelompok2">
                              {{ Form::text('teman2', $halo->teman2, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Tuliskan kedua teman anda', 'disabled')) }}<br><br>
                            </div>
                            <div id="divkelompok3">
                              {{ Form::text('teman3', $halo->teman3, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Tuliskan ketiga teman anda', 'disabled')) }}<br><br>
                            </div>
                            <div id="divkelompok4">
                              {{ Form::text('teman4', $halo->teman4, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Tuliskan keempat teman anda', 'disabled')) }}<br><br>
                            </div>
                            <div id="divkelompok5">
                              {{ Form::text('teman5', $halo->teman5, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Tuliskan kelima teman anda', 'disabled')) }}<br><br>
                            </div>
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
                          {{-- {{ Form::checkbox('klien1', 'Perusahaan') }} Perusahaan --}}
                          <input type="checkbox" name="klien1" value="Perusahaan" @if($halo->klien1=="Perusahaan") checked="true" @endif disabled="true">Perusahaan
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('klien2', 'Instansi / Lembaga Pemerintahan dan Swasta') }} Instansi / Lembaga Pemerintahan dan Swasta --}}
                          <input type="checkbox" name="klien2" value="Instansi / Lembaga Pemerintahan dan Swasta" @if($halo->klien2=="Instansi / Lembaga Pemerintahan dan Swasta") checked="true" @endif disabled="true">Instansi / Lembaga Pemerintahan dan Swasta
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('klien3', 'Orang Dewasa') }} Orang Dewasa --}}
                          <input type="checkbox" name="klien3" value="Orang Dewasa" @if($halo->klien3=="Orang Dewasa") checked="true" @endif disabled="true">Orang Dewasa
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('klien4', 'Remaja') }} Remaja --}}
                          <input type="checkbox" name="klien4" value="Remaja" @if($halo->klien4=="Remaja") checked="true" @endif disabled="true">Remaja
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('klien5', 'Anak') }} Anak --}}
                          <input type="checkbox" name="klien5" value="Anak" @if($halo->klien5=="Anak") checked="true" @endif disabled="true">Anak
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          {{-- {{ Form::checkbox('klien6', 'Lainnya') }} Lainnya --}}
                          <input type="checkbox" name="klien6" value="Lainnya" @if($halo->klien6=="Lainnya") checked="true" @endif disabled="true">Lainnya
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="Pembayaran" class="tabcontent">
                <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <h4 class="hform"> Konfirmasi Bukti Pembayaran </h4>
                  <p>Silakan lakukan upload bukti pembayaran SIPP</p><br>
                  <div class="form-group">
                    <label for="spp/sipp" class="control-label col-md-3 col-sm-3 col-xs-12">Foto Bukti Transfer/Pembayaran Pendaftaran SIPP<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- {{ Form::file('bukti_iuran_sipp', $halo->bukti_iuran_sipp, array('class' => 'form-control')) }} Max File 100kb<br> --}}
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bukti_iuran_sipp">Lihat Bukti Transfer/Pembayaran Pendaftaran SIPP</button>
                      <div class="modal fade" id="bukti_iuran_sipp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Foto Bukti Transfer/Pembayaran Pendaftaran SIPP</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                               <img src="{{ asset('/images/bukti_iuran_sipp/' . $halo->bukti_iuran_sipp) }}" style="width: 75%; height: 50%">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="spp/sipp" class="control-label col-md-3 col-sm-3 col-xs-12">Foto Bukti Iuran Lunas HIMPSI<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {{-- {{ Form::file('bukti_pembayaran_sipp', $halo->bukti_pembayaran_sipp, array('class' => 'form-control')) }} Max File 100kb<br> --}}
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bukti_pembayaran_sipp">Foto Bukti Iuran Lunas HIMPSI</button>
                      <div class="modal fade" id="bukti_pembayaran_sipp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Foto Bukti Iuran Lunas HIMPSI</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                               <img src="{{ asset('/images/bukti_pembayaran_sipp/' . $halo->bukti_pembayaran_sipp) }}" style="width: 75%; height: 50%">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  @endforeach
                    </div>
                  </div>
                </div>
              </div>

              <div id="PendidikanKarir" class="tabcontent">
                <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <h4>Pengalaman Pendidikan</h4>
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th class="column-title"><center>Jenjang Pendidikan</th>
                            <th class="column-title"><center>Universitas</th>
                            <th class="column-title"><center>Bidang Ilmu </th>
                            <th class="column-title"><center>Tahun Masuk</th>
                            <th class="column-title"><center>Tahun Lulus</th>
                            <th class="column-title"><center>Ijazah</th>
                            <th class="column-title"><center>Transkrip</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          @foreach($halo2 as $halo2)
                          <tr>
                            <td><center>{{ $halo2->jenjang_pendidikan }}</center></td>
                            <td><center>{{ $halo2->universitas }}</center></td>
                            <td><center>{{ $halo2->bidang_ilmu }}</center></td>
                            <td><center>{{ $halo2->tahun_masuk }}</center></td>
                            <td><center>{{ $halo2->tahun_lulus }}</center></td>
                            <td>
                              <center>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ijazah<?php echo $i; ?>">Lihat</button>
                              </center>

                              <!-- Modal -->
                              <div class="modal fade" id="ijazah<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <img src="/images/ijazah/{{ $halo2->ijazah }}" style="width: 75%; height: 50%">
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </td>
                            <td>
                              <center>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transkrip<?php echo $i; ?>">Lihat</button>
                              </center>

                              <!-- Modal -->
                              <div class="modal fade" id="transkrip<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <img src="/images/transkrip/{{ $halo2->transkrip }}" style="width: 75%; height: 50%">
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>

                  <br>

                  <h4 class="hform"> Pengalaman Praktik Psikologi </h4>
                      <p> Silakan tuliskan pengalamaan karir yang berkaitan dengan psikologi contoh </p><br>

                      1. Pemilik Jasa Psikologi<br>
                      2. Karyawan <br>
                      3. Associate member<br>
                      4. Dosen di Fak Psikologi</p>

                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr>
                              <th class="column-title">No.</th>
                              <th class="column-title">Tempat Praktik</th>
                              <th class="column-title">Jabatan</th>
                              <th class="column-title">Tahun Mulai </th>
                              <th class="column-title">Tahun Berakhir</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; ?>
                            {{-- @foreach($halo3 as $halo3) --}}
                            <tr id="trkarir1" >
                              <td><center>{{ $i++ }}</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                                {{-- <input type="text" name="nama_organisasi" class="form-control col-md-7 col-xs-12"> --}}
                              </td>
                              <td>
                                {{ Form::text('jabatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::selectRange('tahun_masukKarir[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::selectRange('tahun_keluar[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                            </tr>
                            {{-- @endforeach --}}
                          </tbody>
                        </table>
                        {{-- <center><button id="btntambahkarir" type="button" class="btn btn-primary btn" onclick="tambahKarir();" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Karir</button></center> --}}
                      </div>
                </div>
              </div>

              <div id="PortofolioKasus" class="tabcontent">
                <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th class="column-title">No. </th>
                          <th class="column-title">Tahun </th>
                          <th class="column-title">Tujuan Pemeriksaan </th>
                          <th class="column-title">Nama Lembaga </th>
                          <th class="column-title">Tindakan </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                        @foreach ($halo3 as $halo3)
                        <tr id="trkasus1">
                          <td>{{ $i++ }}</td>
                          <td>
                              {{ Form::selectRange('tahun[]', 2018, 1970, $halo3->tahun, array('class' => 'form-control')) }}
                          </td>
                          <td>
                              {{ Form::textarea('tujuan[]', $halo3->tujuan, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                          </td>
                          <td>
                              {{ Form::textarea('nama_lembaga[]', $halo3->nama_lembaga, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                          </td>
                          <td>
                              {{ Form::textarea('tindakan[]', $halo3->tindakan, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <center><button id="btntambahkasus" type="button" class="btn btn-primary btn" onclick="tambahKasus();" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Kasus</button></center>

                    <br><br><br>
                  </div>
                </div>
              </div>

              <div id="PengembanganProfessional" class="tabcontent">
                <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr>
                              <th class="column-title"><center>No.</th>
                              <th class="column-title"><center>Tahun</th>
                              <th class="column-title"><center>Nama Kegiatan</th>
                              <th class="column-title"><center>Nama Penyelenggara/Organisasi</th>
                              <th class="column-title"><center>Waktu/Lama</th>
                              <th class="column-title"><center>Bukti Foto Sertifikat</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i = 1; ?>
                            @foreach($halo5 as $halo5)
                            <tr>
                              <td><center>{{ $i++ }}</center></td>
                              <td><center>{{ $halo5->tahun }}</center></td>
                              <td><center>{{ $halo5->nama_kegiatan }}</center></td>
                              <td><center>{{ $halo5->nama_penyelenggara }}</center></td>
                              <td><center>{{ $halo5->durasi }}</center></td>
                              <td>
                                <center>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#foto_bukti<?php echo $i; ?>">View</button>
                                </center>

                                <!-- Modal -->
                                <div class="modal fade" id="foto_bukti<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="/images/foto_bukti/{{ $halo5->foto_bukti }}" style="width: 75%; height: 50%">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
              </div>
            {{-- </div> --}}
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
@include('sipp/member/_javascript')
@endsection