<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pengajuan')->unsigned()->nullable();
            $table->string('jenjang_pendidikan')->nullable();
            $table->string('universitas')->nullable();
            $table->string('bidang_ilmu')->nullable();
            $table->string('tahun_masuk')->nullable();
            $table->string('tahun_lulus')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('transkrip')->nullable();
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
        Schema::dropIfExists('pendidikans');
    }
}
