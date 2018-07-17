<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersKarirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_karir', function (Blueprint $table) {
            $table->increments('id_karir');
            $table->integer('id_user')->unsigned()->nullable();
            $table->string('nama_organisasi', 45)->nullable();
            $table->string('jabatan', 45)->nullable();
            $table->string('tahun_masukKarir', 45)->nullable();
            $table->string('tahun_keluar', 45)->nullable();
            $table->string('checklist', 45)->nullable();
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
        Schema::dropIfExists('users_karir');
    }
}
