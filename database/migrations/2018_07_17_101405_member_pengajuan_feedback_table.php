<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MemberPengajuanFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_feedback', function (Blueprint $table) {
            $table->increments('id_feedback');
            $table->integer('id_pengajuan')->unsigned()->nullable();
            $table->string('kode_feedback', 45)->nullable();
            $table->string('catatan')->nullable();
            $table->integer('feedbacker', 11)->nullable();
            $table->tinyInteger('is_viewed')->nullable();
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
        Schema::dropIfExists('pengajuan_feedback');
    }
}
