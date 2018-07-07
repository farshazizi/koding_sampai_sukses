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
                        <li class="active"><a data-toggle="tab">Portofolio Kasus</a>
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
                    {!! Form::open(['route' => 'portofolio_kasus.store']) !!}
                    {{ Form::hidden('id_pengajuan') }}
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="kasus">
                        <h4 class="hform"> Portofolio Kasus Terakhir </h4>
                        <p> Silakan tuliskan kasus-kasus terbaru yang telah ditangani, maksimal 10 kasus. Karena portofolio kasus bersifat rahasia, Anda Tidak perlu melakukan upload/scan kasus ke dalam sistem ini. <b>Anda cukup membawa bukti kasus hanya pada waktu Wawancara saja</b> </p>
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th class="column-title">No. </th>
                                <th class="column-title">Tahun </th>
                                <th class="column-title">Tujuan Pemeriksaan </th>
                                <th class="column-title">Nama Lembaga </th>
                                <th class="column-title">Tindakan </th>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                -->
                              </tr>
                            </thead>
                            <tbody>
                              <tr id="trkasus1">
                                <td>1</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus2">
                                <td>2</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus3">
                                <td>3</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus4">
                                <td>4</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus5">
                                <td>5</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus6" style="display: none;">
                                <td>6</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus7" style="display: none;">
                                <td>7</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus8" style="display: none;">
                                <td>8</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus9" style="display: none;">
                                <td>9</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                              <tr id="trkasus10" style="display: none;">
                                <td>10</td>
                                <td>
                                    {{ Form::selectRange('tahun[]', 2018, 1970, array('class' => 'form-control')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tujuan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('nama_lembaga[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <td>
                                    {{ Form::textarea('tindakan[]', null, array('class' => 'form-control', 'style' => 'height: 80px')) }}
                                </td>
                                <!-- Hanya muncul saat edit berkas, jika dicentang berarti dicentang juga oleh tim bidang 3
                                <td>
                                <center>
                                <input type="checkbox" disabled checked value=""><br> 
                                <a href="#">Delete</a>
                                </center>
                                </td>
                                -->
                              </tr>
                            </tbody>
                          </table>
                          <center><button id="btntambahkasus" type="button" class="btn btn-primary btn" onclick="tambahKasus();" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Kasus</button></center>

                          <br><br><br>

                          <div class="box-footer">
                            <div class="col-lg-6"><a href="#pendidikankarir" data-toggle="tab">
                              <button type="button" class="btn btn-primary btn-block" onclick="backwardPembayaran(4);" data-toggle="modal" data-target=".bs-example-modal-lg">Kembali</button></a>
                            </div>
                            <div class="col-lg-6">
                                {{-- <a href="#peng-pro" data-toggle="tab">
                                    <button type="button" class="btn btn-primary btn-block" onclick="forwardPembayaran(4);" data-toggle="modal" data-target=".bs-example-modal-lg">Lanjutkan</button>
                                </a> --}}
                              {{ Form::submit('Lanjutkan', array('class' => 'btn btn-primary btn-block')) }}
                            </div>
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