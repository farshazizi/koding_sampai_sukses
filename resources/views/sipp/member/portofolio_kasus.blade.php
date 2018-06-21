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
                    <form method="POST" action="member/tambahsipp">
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
                                  <select class="form-control" name="tahunkasus1">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan1"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga1"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan1"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus2">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan2"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga2"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan2"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus3">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan3"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga3"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan3"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus4">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan4"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga4"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan4"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus5">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan5"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga5"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan5"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus6">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan6"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga6"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan6"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus7">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan7"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga7"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan7"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus8">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan8"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga8"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan8"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus9">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan9"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga9"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan9"></textarea></td>
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
                                  <select class="form-control" name="tahunkasus10">
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
                                <td><textarea class="textarea-table" name="tujuan_pemeriksaan10"></textarea></td>
                                <td><textarea class="textarea-table" name="nama_lembaga10"></textarea></td>
                                <td><textarea class="textarea-table" name="tindakan10"></textarea></td>
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
                            <div class="col-lg-6"><a href="#peng-pro" data-toggle="tab">
                              <button type="button" class="btn btn-primary btn-block" onclick="forwardPembayaran(4);" data-toggle="modal" data-target=".bs-example-modal-lg">Lanjutkan</button></a>
                            </div>
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