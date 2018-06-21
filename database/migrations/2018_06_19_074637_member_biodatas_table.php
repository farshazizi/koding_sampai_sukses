<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('nama_lengkap');
            $table->string('foto_pas');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('gender');
            $table->string('status_menikah');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kodepos');
            $table->string('telepon');
            $table->string('handphone');
            $table->string('pendidikan1');
            $table->string('pendidikan2');
            $table->string('pendidikan3');
            $table->string('pendidikan4');
            $table->string('foto_ktp');
            $table->string('foto_kta');
            $table->string('sertifikat_sebutan');
            $table->string('surat_izin');
            $table->string('bidang1');
            $table->string('bidang2');
            $table->string('bidang3');
            $table->string('bidang4');
            $table->string('bidang5');
            $table->string('nama_praktek');
            $table->string('alamat_praktek');
            $table->string('alat_tes');
            $table->string('teman_praktek');
            $table->string('teman1');
            $table->string('teman2');
            $table->string('teman3');
            $table->string('teman4');
            $table->string('teman5');
            $table->string('klien1');
            $table->string('klien2');
            $table->string('klien3');
            $table->string('klien4');
            $table->string('klien5');
            $table->string('klien6');
            $table->string('bukti_iuran_sipp');
            $table->string('bukti_pembayaran_sipp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_biodatas');
    }
}
