<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberPengembangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_pengembangan', function (Blueprint $table) {
            $table->increments('id_pengembangan');
            $table->integer('id_pengajuan')->unsigned()->nullable();
            $table->string('tahun')->nullable();
            $table->string('nama_kegiatan')->nullable();
            $table->string('nama_penyelenggara')->nullable();
            $table->string('durasi')->nullable();
            $table->string('foto_bukti')->nullable();
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
        Schema::dropIfExists('pengajuan_pengembangan');
    }
}
