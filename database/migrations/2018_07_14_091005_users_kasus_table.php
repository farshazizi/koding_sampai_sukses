<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersKasusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_kasus', function (Blueprint $table) {
            $table->increments('id_kasus');
            $table->integer('id_user')->unsigned()->nullable();
            $table->string('tahun', 45)->nullable();
            $table->string('tujuan', 45)->nullable();
            $table->string('nama_lembaga', 45)->nullable();
            $table->string('tindakan', 45)->nullable();
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
        Schema::dropIfExists('users_kasus');
    }
}
