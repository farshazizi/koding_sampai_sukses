@extends('welcome')
@section('content')

<div class="page-sidebar-wrapper">
  @include('sipp/tim_bidang3/_sidebar')
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
            <div id="buatjadwalwawancara" class="tabcontent">
              <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                {!! Form::open(['route' => 'buatjadwalwawancara.store', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
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
                  <label for="Tanggal-lhr" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir<span class="required">*</span></label>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    {{-- <input id="tanggal_lahir" class="form-control col-md-7 col-xs-12" type="date" name="tanggal_lahir" required> --}}
                    {{ Form::date('tanggal_lahir', null, array('class' => 'form-control col-md-4 col-xs-12')) }} 

                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <select class="form-control col-md-2" name="jam" required>
                      <option disabled selected>Pilih Jam</option>
                      <option value="23:30">23:30</option><option value="23:00">23:00</option><option value="22:30">22:30</option><option value="22:00">22:00</option><option value="21:30">21:30</option><option value="21:00">21:00</option><option value="20:30">20:30</option><option value="20:00">20:00</option><option value="19:30">19:30</option><option value="19:00">19:00</option><option value="18:30">18:30</option><option value="18:00">18:00</option><option value="17:30">17:30</option><option value="17:00">17:00</option><option value="16:30">16:30</option><option value="16:00">16:00</option><option value="15:30">15:30</option><option value="15:00">15:00</option><option value="14:30">14:30</option><option value="14:00">14:00</option><option value="13:30">13:30</option><option value="13:00">13:00</option><option value="12:30">12:30</option><option value="12:00">12:00</option><option value="11:30">11:30</option><option value="11:00">11:00</option><option value="10:30">10:30</option><option value="10:00">10:00</option><option value="09:30">09:30</option><option value="09:00">09:00</option><option value="08:30">08:30</option><option value="08:00">08:00</option><option value="07:30">07:30</option><option value="07:00">07:00</option><option value="06:30">06:30</option><option value="06:00">06:00</option><option value="05:30">05:30</option><option value="05:00">05:00</option><option value="04:30">04:30</option><option value="04:00">04:00</option><option value="03:30">03:30</option><option value="03:00">03:00</option><option value="02:30">02:30</option><option value="02:00">02:00</option><option value="01:30">01:30</option><option value="01:00">01:00</option><option value="00:30">00:30</option><option value="00:00">00:00</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Tempat<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    {{ Form::text('alamat', null, array('class' => 'form-control col-md-7 col-xs-12')) }}
                  </div>
                </div>

                <div class="form-group">
                  <label for="pewawancara1" class="control-label col-md-3 col-sm-3 col-xs-12">Pewawancara 1<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" name="pewawancara1" required>
                      <option disabled selected>Pilih Pewawancara 1</option>
                      <option value="4">Prof. Dr. Jatie K. Pudjibudojo, SU., Psikolog</option><option value="5">Prof. Dr. Yusti Probowati, Psikolog</option><option value="6">Drs. E. M. Agus Subekti, M. Kes., M. Psi., Psikolog</option><option value="7">Drs. M. Zainal Abidin, M.Si., Psikolog</option><option value="8">Dr. Hartanti, M.Si., Psikolog</option><option value="66">Dr. Seger Handoyo, Psikolog</option><option value="67">Dra. Dwi Redjeki Endang Haniwati, M.Si., Psikolog</option><option value="68">Dra. Woelan Handadari, M.Si., Psikolog</option><option value="69">Dra. Astrid Regina Sapiie Wiratna, Psikolog</option><option value="70">Naftalia Kusumawardhani, M.Si., Psikolog</option><option value="71">Endang Retno Surjaningrum, M.Psych., Psikolog</option><option value="72">Dr. Verina Halim, Psikolog</option><option value="73">Dra. Soerjantini Rahayu, MA., Psikolog</option><option value="81">Dra. Sri Weni Utami, M.Si., Psikolog</option><option value="82">Dr. Andik Matulessy, Psikolog </option><option value="83">Dr. Duta Nurdibyanandaru, MS., Psikolog</option><option value="84">Dra. Jennie Chriswatie, Psikolog</option><option value="85">Dra. Sri Wahyuningsih, M.Kes., Psikolog</option><option value="86">Ike Herdiana, M.Psi., Psikologg</option><option value="87">Laila Saleh Marta', S.Psi., MMT., Psikolog</option><option value="152">Demo Wawancara</option><option value="230">boboho</option><option value="231">boboho</option><option value="233">Pewawancara</option>                                            
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="pewawancara2" class="control-label col-md-3 col-sm-3 col-xs-12">Pewawancara 2<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" name="pewawancara1" required>
                      <option disabled selected>Pilih Pewawancara 2</option>
                      <option value="4">Prof. Dr. Jatie K. Pudjibudojo, SU., Psikolog</option><option value="5">Prof. Dr. Yusti Probowati, Psikolog</option><option value="6">Drs. E. M. Agus Subekti, M. Kes., M. Psi., Psikolog</option><option value="7">Drs. M. Zainal Abidin, M.Si., Psikolog</option><option value="8">Dr. Hartanti, M.Si., Psikolog</option><option value="66">Dr. Seger Handoyo, Psikolog</option><option value="67">Dra. Dwi Redjeki Endang Haniwati, M.Si., Psikolog</option><option value="68">Dra. Woelan Handadari, M.Si., Psikolog</option><option value="69">Dra. Astrid Regina Sapiie Wiratna, Psikolog</option><option value="70">Naftalia Kusumawardhani, M.Si., Psikolog</option><option value="71">Endang Retno Surjaningrum, M.Psych., Psikolog</option><option value="72">Dr. Verina Halim, Psikolog</option><option value="73">Dra. Soerjantini Rahayu, MA., Psikolog</option><option value="81">Dra. Sri Weni Utami, M.Si., Psikolog</option><option value="82">Dr. Andik Matulessy, Psikolog </option><option value="83">Dr. Duta Nurdibyanandaru, MS., Psikolog</option><option value="84">Dra. Jennie Chriswatie, Psikolog</option><option value="85">Dra. Sri Wahyuningsih, M.Kes., Psikolog</option><option value="86">Ike Herdiana, M.Psi., Psikologg</option><option value="87">Laila Saleh Marta', S.Psi., MMT., Psikolog</option><option value="152">Demo Wawancara</option><option value="230">boboho</option><option value="231">boboho</option><option value="233">Pewawancara</option>                                            
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    {{ Form::textarea('catatan', null, array('class' => 'form-control', 'rows' => '10', 'cols' => '80', 'placeholder' => 'Barang yang harus dibawa :
                    1. Materai Rp6.000
                    2. Ijazah asli dan transkrip asli
                    3. KTP, KTA, dan bukti Pembayaran
                    4. Berkas portofolio kasus
                    5. Sertifikat asli pengembangan profesional')) }}
                  </div>
                </div>

                <br>

                {{ Form::submit('Tambahkan Jadwal', array('class' => 'btn btn-primary btn-block')) }}
                @endforeach
              {!! Form::close() !!}
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('sipp/member/_javascript')
@endsection