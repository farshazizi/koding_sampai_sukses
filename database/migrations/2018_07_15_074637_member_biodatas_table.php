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
        Schema::create('pengajuan_administrasi', function (Blueprint $table) {
            $table->integer('id_pengajuan')->unsigned()->nullable();
            $table->string('email')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('foto_pas')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('gender')->nullable();
            $table->string('status_menikah')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('handphone')->nullable();
            $table->string('pendidikan1')->nullable();
            $table->string('pendidikan2')->nullable();
            $table->string('pendidikan3')->nullable();
            $table->string('pendidikan4')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_kta')->nullable();
            $table->string('sertifikat_sebutan')->nullable();
            $table->string('surat_izin')->nullable();
            $table->string('bidang1')->nullable();
            $table->string('bidang2')->nullable();
            $table->string('bidang3')->nullable();
            $table->string('bidang4')->nullable();
            $table->string('bidang5')->nullable();
            $table->string('nama_praktek')->nullable();
            $table->string('alamat_praktek')->nullable();
            $table->string('alat_tes')->nullable();
            $table->string('teman_praktek')->nullable();
            $table->string('teman1')->nullable();
            $table->string('teman2')->nullable();
            $table->string('teman3')->nullable();
            $table->string('teman4')->nullable();
            $table->string('teman5')->nullable();
            $table->string('klien1')->nullable();
            $table->string('klien2')->nullable();
            $table->string('klien3')->nullable();
            $table->string('klien4')->nullable();
            $table->string('klien5')->nullable();
            $table->string('klien6')->nullable();
            $table->string('bukti_iuran_sipp')->nullable();
            $table->string('bukti_pembayaran_sipp')->nullable();
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
