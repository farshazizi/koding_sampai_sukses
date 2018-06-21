@extends('welcome')
@section('content')
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    @include('sipp/administrasi/_sidebar')
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
                        <h1 class="page-header">Master Data User</h1>
                    </div>
                </div>

                <div class="row" style="margin-top: 8px; margin-bottom: 8px">
                    <div class="col-lg-12">
                        <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah User</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>NIK</label>
                                        <input type="text" name="nik">
                                        <br><br>
                                        <label>Nama</label>
                                        <input type="text" name="nama">
                                        <br><br>
                                        <label>Password</label>
                                        <input type="password" name="password">
                                        <br><br>
                                        <label>Email</label>
                                        <input type="email" name="email">
                                        <br><br>
                                        <label>No Hp</label>
                                        <input type="text" name="hp">
                                        <br><br>
                                        <label>Role</label>
                                        <select name="role">
                                            <option disabled="true" selected="true">Pilih Role</option>
                                            <option value="member">Member</option>
                                            <option value="wawancara">Wawancara</option>
                                        </select>
                                        {{-- <table style="width: 100%">
                                            <tr>
                                                <td>NIk</td>
                                                <td></td>
                                                <td><input type="number" name="nik"></td>
                                            </tr>

                                            <tr>
                                                <td>NIk</td>
                                                <td></td>
                                                <td><input type="number" name="nik"></td>
                                            </tr>

                                            <tr>
                                                <td>NIk</td>
                                                <td></td>
                                                <td><input type="number" name="nik"></td>
                                            </tr>

                                            <tr>
                                                <td>NIk</td>
                                                <td></td>
                                                <td><input type="number" name="nik"></td>
                                            </tr>

                                            <tr>
                                                <td>NIk</td>
                                                <td></td>
                                                <td><input type="number" name="nik"></td>
                                            </tr>

                                            <tr>
                                                <td>NIk</td>
                                                <td></td>
                                                <td><input type="number" name="nik"></td>
                                            </tr>
                                        </table> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Danger</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Hp</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10 Juni 2018</td>
                                    <td>A</td>
                                    <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>10 Juni 2018</td>
                                    <td>A</td>
                                    <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>10 Juni 2018</td>
                                    <td>A</td>
                                    <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>10 Juni 2018</td>
                                    <td>A</td>
                                    <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>10 Juni 2018</td>
                                    <td>A</td>
                                    <td>Menunggu Pengecekan Ulang Tim Bidang</td>
                                    <td>081234567890</td>
                                    <td>Admin</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
</div>
<!-- END CONTENT -->
@endsection