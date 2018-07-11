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
                <li class="active"><a data-toggle="tab">Pendidikan - Karir</a>
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
              {{-- <form method="POST" action="member/tambahsipp"> --}}
              {!! Form::open(['route' => 'pendidikan_karir.store', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
                {{ Form::hidden('id_pengajuan') }}
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="pendidikankarir">
                      <h4 class="hform"> Pengalaman Pendidikan</h4>
                      
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
                            <tr id="trpendidikan1">
                              <td>
                                {{ Form::select('jenjang_pendidikan[]', ['S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3'], null, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('universitas[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('bidang_ilmu[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::selectRange('tahun_masuk[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::selectRange('tahun_lulus[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                <center>
                                  {{ Form::file('ijazah[]', null, array('class' => 'form-control', 'multiple')) }}
                                  {{-- <input type="file" name="ijazah[]" class="form-control" multiple> --}}
                                </center>
                              </td>
                              <td>
                                <center>
                                  {{ Form::file('transkrip[]', null, array('class' => 'form-control', 'multiple')) }}
                                  {{-- <input type="file" name="transkrip[]" class="form-control" multiple> --}}
                                </center>
                              </td>
                            </tr>
                            <tr id="trpendidikan2" style="display:none;">
                              <td>
                                {{ Form::select('jenjang_pendidikan[]', ['S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3'], null, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('universitas[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('bidang_ilmu[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::selectRange('tahun_masuk[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::selectRange('tahun_lulus[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                <center>
                                  {{ Form::file('ijazah[]', null, array('class' => 'form-control', 'multiple')) }}
                                  {{-- <input type="file" name="ijazah[]" class="form-control" multiple> --}}
                                </center>
                              </td>
                              <td>
                                <center>
                                  {{ Form::file('transkrip[]', null, array('class' => 'form-control', 'multiple')) }}
                                  {{-- <input type="file" name="transkrip[]" class="form-control" multiple> --}}
                                </center>
                              </td>
                            </tr>
                            <tr id="trpendidikan3" style="display:none;">
                              <td>
                                {{ Form::select('jenjang_pendidikan[]', ['S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3'], null, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::text('universitas[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::text('bidang_ilmu[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                              </td>
                              <td>
                                {{ Form::selectRange('tahun_masuk[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                {{ Form::selectRange('tahun_lulus[]', 2018, 1970, array('class' => 'form-control')) }}
                              </td>
                              <td>
                                <center>
                                  {{ Form::file('ijazah[]', null, array('class' => 'form-control', 'multiple')) }}
                                  {{-- <input type="file" name="ijazah[]" class="form-control" multiple> --}}
                                </center>
                              </td>
                              <td>
                                <center>
                                  {{ Form::file('transkrip[]', null, array('class' => 'form-control', 'multiple')) }}
                                  {{-- <input type="file" name="transkrip[]" class="form-control" multiple> --}}
                                </center>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <center><button id="btntambahpendidikan" type="button" class="btn btn-primary btn" onclick="tambahPendidikan();" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Pendidikan</button></center>
                      </div>

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
                            <tr id="trkarir1" >
                              <td><center>1</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir2" style="display: none;">
                              <td><center>2</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir3" style="display: none;">
                              <td><center>3</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir4" style="display: none;">
                              <td><center>4</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir5" style="display: none;">
                              <td><center>5</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir6" style="display: none;">
                              <td><center>6</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir7" style="display: none;">
                              <td><center>7</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir8" style="display: none;">
                              <td><center>8</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir9" style="display: none;">
                              <td><center>9</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                            <tr id="trkarir10" style="display: none;">
                              <td><center>10</center></td>
                              <td>
                                {{ Form::text('nama_organisasi[]', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
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
                          </tbody>
                        </table>
                        <center><button id="btntambahkarir" type="button" class="btn btn-primary btn" onclick="tambahKarir();" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Karir</button></center>
                      </div>

                      <br><br><br>
                      
                      <div class="box-footer">
                        <div class="col-lg-6"><a href="#pendidikankarir" data-toggle="tab">
                          <button type="button" class="btn btn-primary btn-block" onclick="backwardPembayaran(4);" data-toggle="modal" data-target=".bs-example-modal-lg">Kembali</button></a>
                        </div>
                        <div class="col-lg-6">
                          {{-- <a href="#peng-pro" data-toggle="tab">
                          <button type="button" class="btn btn-primary btn-block" onclick="forwardPembayaran(4);" data-toggle="modal" data-target=".bs-example-modal-lg">Lanjutkan</button></a> --}}
                          {{ Form::submit('Lanjutkan', array('class' => 'btn btn-primary btn-block')) }}
                        </div>
                        {{-- <input type="hidden" name="submitpendidikan"  value="submitpendidikan"> --}}
                        {{-- <center><button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal-lg">Lanjutkan</button></center> --}}
                      </div>
                    </div>
                </div>
                {{ Form::close() }}
                {{-- </form> --}}
            </div>
          </div>
            <!-- /.panel-body -->
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