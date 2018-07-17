<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersAdministrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_administrasi', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('email', 45)->nullable();
            $table->string('nama_lengkap', 45)->nullable();
            $table->string('foto_pas', 45)->nullable();
            $table->string('tempat_lahir', 45)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama', 45)->nullable();
            $table->string('gender', 45)->nullable();
            $table->string('status_menikah', 45)->nullable();
            $table->string('alamat', 45)->nullable();
            $table->string('kota', 45)->nullable();
            $table->string('kodepos', 45)->nullable();
            $table->string('telepon', 45)->nullable();
            $table->string('handphone', 45)->nullable();
            $table->string('pendidikan1', 45)->nullable();
            $table->string('pendidikan2', 45)->nullable();
            $table->string('pendidikan3', 45)->nullable();
            $table->string('pendidikan4', 45)->nullable();
            $table->string('foto_ktp', 45)->nullable();
            $table->string('foto_kta', 45)->nullable();
            $table->string('sertifikat_sebutan', 45)->nullable();
            $table->string('surat_izin', 45)->nullable();
            $table->string('bidang1', 45)->nullable();
            $table->string('bidang2', 45)->nullable();
            $table->string('bidang3', 45)->nullable();
            $table->string('bidang4', 45)->nullable();
            $table->string('bidang5', 45)->nullable();
            $table->string('nama_praktek', 45)->nullable();
            $table->string('alamat_praktek', 45)->nullable();
            $table->string('alat_tes', 45)->nullable();
            $table->string('teman_praktek', 45)->nullable();
            $table->string('teman1', 45)->nullable();
            $table->string('teman2', 45)->nullable();
            $table->string('teman3', 45)->nullable();
            $table->string('teman4', 45)->nullable();
            $table->string('teman5', 45)->nullable();
            $table->string('klien1', 45)->nullable();
            $table->string('klien2', 45)->nullable();
            $table->string('klien3', 45)->nullable();
            $table->string('klien4', 45)->nullable();
            $table->string('klien5', 45)->nullable();
            $table->string('klien6', 45)->nullable();
            $table->string('bukti_iuran_sipp', 45)->nullable();
            $table->string('bukti_pembayaran_sipp', 45)->nullable();
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
        Schema::dropIfExists('users_administrasi');
    }
}
