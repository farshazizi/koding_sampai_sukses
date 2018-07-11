@extends('welcome')
@section('content')
<div class="page-sidebar-wrapper">
    @include('sipp/administrasi/_sidebar')
</div>

<div class="page-content-wrapper">
  <div class="page-content">
    <div id="wrapper">
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              @foreach($halo as $halo)
              <div class="panel-heading">
                <div class="panel-body" style="background-color: white">
                  <div class="col-lg-4">
                    <div style="height: 500px; width: auto; border: 1px solid;">
                      <center><img src=" " style="max-height: 500px; max-width: auto;" ></center>
                    </div>
                  </div>

                  <div class="col-lg-8">
                    <h4>Nama  : {{ $halo->nama_lengkap }}</h4>
                    <h4>NIK   : 20120072</h4>
                    <br>
                    <h5> Catatan Feedback</h5>
                    <textarea id="editor1" name="catatan" rows="10" cols="80" placeholder="Tuliskan sesuatu disini"></textarea>
                    <br><br>
                    <div>
                      <select class="form-control" name="feedback" required>
                        <option value="" disabled selected>-- Pilih Status Pengajuan --</option>
                        <option value="3">Berkas dikonfirmasi. Melanjutkan pengecekan Tim Bidang.</option>
                        <option value="1">Berkas tidak memenuhi syarat. Menginstruksikan Pengaju memperbaiki berkas.</option>
                      </select>
                    </div>
                    <br>
                    <center><button type="submit" class="btn btn-primary btn-block">Kirim Feedback, Update Checklist Administrasi, dan Update Data</button></center>
                  </div>
                </div>
                <br>
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
                  <li class="disabled"><a class="nav-link disabled">Feedback</a>
                  </li>
                </ul>

                {{-- {!! Form::open(['route' => 'biodata.store', 'files'=>true, 'enctype'=>'multipart/form-data']) !!} --}}
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="biodata">
                      <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        
                        <div class="form-group">
                          <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::text('email', $halo->email, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'purwandari@gmail.com')) }}
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lkp">Nama Lengkap<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::text('nama_lengkap', $halo->nama_lengkap, array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Purwandari, M.Si.')) }}
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="foto" class="control-label col-md-3 col-sm-3 col-xs-12">Pasfoto ukuran 4 x 6<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::file('foto_pas', null, array('class' => 'form-control')) }}
                            <br>
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
                            {{ Form::text('tempat_lahir', $halo->tempat_lahir, array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="Tanggal-lhr" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{-- <input id="tanggal_lahir" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_lahir" required> --}}
                            {{ Form::date('tanggal_lahir', $halo->tanggal_lahir, array('class' => 'form-control col-md-7 col-xs-12')) }} 
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="agama" class="control-label col-md-3 col-sm-3 col-xs-12">Agama<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::select('agama', ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha', 'Kong Hu cu' => 'Kong Hu cu'], $halo->agama, array('class' => 'form-control')) }}
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
                            {{ Form::select('status_menikah', ['Single' => 'Single', 'Menikah' => 'Menikah'], $halo->status_menikah, array('class' => 'form-control')) }}
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::text('alamat', $halo->alamat, array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::text('kota', $halo->kota, array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="kodepos" class="control-label col-md-3 col-sm-3 col-xs-12">Kodepos<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::text('kodepos', $halo->kodepos, array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="telp" class="control-label col-md-3 col-sm-3 col-xs-12">Telepon<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::text('telepon', $halo->telepon, array('class' => 'form-control col-md-7 col-xs-12')) }}
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="no-hp" class="control-label col-md-3 col-sm-3 col-xs-12">Handphone/Whatsapp<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {{ Form::text('handphone', $halo->handphone, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            {{ Form::file('foto_ktp', null, array('class' => 'form-control')) }}
                            <br>
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
                            {{ Form::file('foto_kta', null, array('class' => 'form-control')) }}
                            <br>
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
                            {{ Form::file('sertifikat_sebutan', null, array('class' => 'form-control')) }}
                            <br>
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
                            {{ Form::file('surat_izin', null, array('class' => 'form-control')) }}
                            <br>
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

                        <div class="box-footer">
                          <center>
                              {{ Form::submit('Lanjutkan', array('class' => 'btn btn-primary btn-block')) }}
                          </center>
                        </div>

                      </div>
                    </div>
                  </div>
                {{-- {!! Form::close() !!} --}}
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection