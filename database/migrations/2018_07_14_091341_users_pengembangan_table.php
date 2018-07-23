<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersPengembanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_pengembangan', function (Blueprint $table) {
            $table->increments('id_pengembangan');
            $table->integer('id_user')->unsigned()->nullable();
            $table->string('tahun', 45)->nullable();
            $table->string('nama_kegiatan', 45)->nullable();
            $table->string('nama_penyelenggara', 45)->nullable();
            $table->string('durasi', 45)->nullable();
            $table->string('foto_bukti', 45)->nullable();
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
        Schema::dropIfExists('users_pengembangan');
    }
}
