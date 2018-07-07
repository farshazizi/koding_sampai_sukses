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
                        <li class="active"><a data-toggle="tab">Pengembangan Professional</a>
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
                    {{-- <form method="POST" action="member/tambahsipp"  enctype="multipart/form-data"> --}}
                    {!! Form::open(['route' => 'pengembangan_prof.store', 'files'=> true, 'enctype'=>'multipart/form-data']) !!}
                    {{ Form::hidden('id_pengajuan') }}
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="peng-pro">
                        <h4 class="hform"> Portofolio Pengembangan Professional </h4>
                        <p>Silakan tuliskan beberapa kegiatan pengembangan professional seperti Seminar, Pelatihan dan Workshop. Jangan lupa untuk upload scan foto bukti pengembangan professional Anda. Maksimal Ukuran toto Upload 500kb </p>
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr>
                              <th class="column-title">No.</th>
                              <th class="column-title">Tahun</th>
                              <th class="column-title">Nama Kegiatan</th>
                              <th class="column-title">Nama Penyelenggara</th>
                              <th class="column-title">Durasi/Lama</th>
                              <th class="column-title">Bukti Foto Sertifikat</th>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <th class="column-title no-link last"><span class="nobr">Action</span>
                              -->
                            </tr>
                          </thead>
                          
                          <tbody>
                            <tr id="trpengembanganprofesi1">
                              <td>1</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi2">
                              <td>2</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi3">
                              <td>3</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi4">
                              <td>4</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi5">
                              <td>5</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi6" style="display: none;">
                              <td>6</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi7" style="display: none;">
                              <td>7</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi8" style="display: none;">
                              <td>8</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan8" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara8" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi8" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan8"> Max File 100kb</td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi9" style="display: none;">
                              <td>9</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                            <tr id="trpengembanganprofesi10" style="display: none;">
                              <td>10</td>
                              <td>
                                {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_kegiatan[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('nama_penyelenggara[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('durasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::file('foto_bukti[]', null, array('class' => 'form-control')) }} Max File 100kb<br>
                              </td>
                              <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                              <td>
                              <center>
                              <input type="checkbox" disabled checked value=""><br>
                              <a href="#">View</a><br>
                              <a href="#">Delete</a>
                              </center>
                              </td>
                              -->
                            </tr>
                          </tbody>
                          </table>
                          <center><button id="btnpengembanganprofesi" type="button" class="btn btn-primary btn" onclick="btnPengembanganprofesi();" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Pengembangan Profesi</button></center>
                        </div>

                        <br>
                        <br>
                        <br>

                        <hr>
                        <div class="box-footer">
                          <div class="col-lg-6"><a href="#kasus" data-toggle="tab">
                            <button type="button" class="btn btn-primary btn-block" onclick="backwardPembayaran(5);" data-toggle="modal" data-target=".bs-example-modal-lg">Kembali</button></a>
                          </div>
                          <div class="col-lg-6">
                            {{-- <a href="#final" data-toggle="tab">
                            <button type="button" class="btn btn-primary btn-block" onclick="forwardPembayaran(5);" data-toggle="modal" data-target=".bs-example-modal-lg">Lanjutkan</button></a> --}}
                            {{ Form::submit('Lanjutkan', array('class' => 'btn btn-primary btn-block')) }}
                          </div>
                        </div>
                      </div>
                    </div>
                    {{ Form::close() }}
                    {{-- </form> --}}
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