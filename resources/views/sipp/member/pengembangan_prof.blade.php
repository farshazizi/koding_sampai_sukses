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
                    <form method="POST" action="member/tambahsipp"  enctype="multipart/form-data">
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="peng-pro">
                        <h4 class="hform"> Portofolio Pengembangan Professional </h4>
                        <p>Silakan tuliskan beberapa kegiatan pengembangan professional seperti Seminar, Pelatihan dan Workshop. Jangan lupa untuk upload scan foto bukti pengembangan professional Anda. Maksimal Ukuran toto Upload 500kb </p>
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <tr>
                              <th class="column-title">No. </th>
                              <th class="column-title">Tahun </th>
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
                                <select class="form-control" name="tahunpengembangan1">
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan1" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara1" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi1" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan1"> Max File 100kb</td>
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
                                <select class="form-control" name="tahunpengembangan2">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan2" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara2" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi2" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan2"> Max File 100kb</td>
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
                                <select class="form-control" name="tahunpengembangan3">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan3" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara3" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi3" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan3"> Max File 100kb</td>
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
                                <select class="form-control" name="tahunpengembangan4">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan4" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara4" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi4" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembanga4"> Max File 100kb</td>
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
                                <select class="form-control" name="tahunpengembangan5">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan5" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara5" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi5" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan5"> Max File 100kb</td>
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
                                <select class="form-control" name="tahunpengembangan6">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan6" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara6" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi6" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan6"> Max File 100kb</td>
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
                                <select class="form-control" name="tahunpengembangan7">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan7" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara7" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi7" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan7"> Max File 100kb</td>
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
                                <select class="form-control" name="tahunpengembangan8">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
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
                                <select class="form-control" name="tahunpengembangan9">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan9" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara9" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi9" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan9"> Max File 100kb</td>
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
                                <select class="form-control" name="tahunpengembangan10">
                                  <option value="2018">2018</option>
                                  <option value="2017">2017</option>
                                  <option value="2016">2016</option>
                                  <option value="2015">2015</option>
                                  <option value="2014">2014</option>
                                  <option value="2013">2013</option>
                                  <option value="2012">2012</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select>
                              </td>
                              <td><input type="text" id="nama_lkp" name="nama_kegiatan10" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="nama_penyelenggara10" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input type="text" id="nama_lkp" name="durasi10" class="form-control col-md-7 col-xs-12" ></td>
                              <td><input id="spp/sipp" type="file" class="file" name="foto_pengembangan10"> Max File 100kb</td>
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
                          <div class="col-lg-6"><a href="#final" data-toggle="tab">
                            <button type="button" class="btn btn-primary btn-block" onclick="forwardPembayaran(5);" data-toggle="modal" data-target=".bs-example-modal-lg">Lanjutkan</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
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