@extends('welcome')
@section('content')
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    @include('sipp/pewawancara/_sidebar')
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
        <div id="wrapper">
        <!-- Navigation -->
        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">List Pemohon SIPP</h1>
            </div>
            <!-- /.col-lg-12 -->
          </div>

          <!-- /.row -->
          <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pengaju</th>
                            <th>Nama</th>
                            <th>Waktu</th>
                            <th>Tempat</th>
                            <th>Pewawancara 1</th>
                            <th>Pewawancara 2</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach($halo as $halo)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $halo->id }}</td>
                            <td>{{ $halo->nama_lengkap }}</td>
                            <td>15 Juni 2018</td>
                            <td>Surabyaa</td>
                            <td>ABC</td>
                            <td>DEF</td>
                            <td>
                                <a href="{{ route('dowawancara.show', $halo->id) }}"><button type="button" class="btn btn-primary">Mulai Wawancara</button></a>
                                {{-- <a href="/sipp/pewawancara/dowawancara"><button type="button" class="btn btn-primary">Mulai Wawancara</button></a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /#page-wrapper -->
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection