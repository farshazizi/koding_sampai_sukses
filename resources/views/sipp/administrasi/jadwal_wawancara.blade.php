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
            <h1 class="page-header">List Pemohon SIPP</h1>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <label for="Tanggal-lhr" class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Lahir<span class="required">*</span></label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              {{ Form::date('tanggal_lahir', null, array('class' => 'form-control')) }} 
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pengajuan</th>
                  <th>Nama</th>
                  <th>Waktu Wawancara</th>
                  <th>Tempat</th>
                  <th>Pewawancara 1</th>
                  <th>Pewawancara 2</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                @foreach($halo as $halo)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $halo->id }}</td>
                  <td>{{ $halo->nama_lengkap }}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection