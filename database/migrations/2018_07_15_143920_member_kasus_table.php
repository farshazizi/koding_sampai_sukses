<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberKasusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_kasus', function (Blueprint $table) {
            $table->increments('id_kasus');
            $table->integer('id_pengajuan')->unsigned()->nullable();
            $table->string('tahun')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('nama_lembaga')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('kasuss');
    }
}
