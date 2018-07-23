<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberPengajuanWawancaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_wawancara', function (Blueprint $table) {
            $table->integer('id_pengajuan')->unsigned()->nullable();
            $table->string('waktu_wawancara', 45);
            $table->string('tempat', 45);
            $table->integer('pewawancara_1');
            $table->integer('pewawancara_2');
            $table->string('keterampilan1', 45);
            $table->string('keterampilan2', 45);
            $table->string('keterampilan3', 45);
            $table->string('keterampilan4', 45);
            $table->string('keterampilan5', 45);
            $table->string('etika1', 45);
            $table->string('etika2', 45);
            $table->string('etika3', 45);
            $table->string('kelebihan', 45);
            $table->string('kekurangan', 45);
            $table->string('rekomendasi', 45);
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
        Schema::dropIfExists('pengajuan_wawancara');
    }
}
