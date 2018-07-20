<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberKarirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_karir', function (Blueprint $table) {
            $table->increments('id_karir');
            $table->integer('id_pengajuan')->unsigned()->nullable();
            $table->string('nama_organisasi')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('tahun_masukKarir')->nullable();
            $table->string('tahun_keluar')->nullable();
            $table->string('checklist')->nullable();
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
        Schema::dropIfExists('pengajuan_karir');
    }
}
