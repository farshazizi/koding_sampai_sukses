<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_pendidikan', function (Blueprint $table) {
            $table->increments('id_pendidikan');
            $table->integer('id_user')->unsigned()->nullable();
            $table->string('jenjang_pendidikan', 45)->nullable();
            $table->string('universitas', 45)->nullable();
            $table->string('bidang_ilmu', 45)->nullable();
            $table->string('tahun_masuk', 45)->nullable();
            $table->string('tahun_lulus', 45)->nullable();
            $table->string('ijazah', 45)->nullable();
            $table->string('transkrip', 45)->nullable();
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
        Schema::dropIfExists('users_pendidikan');
    }
}
