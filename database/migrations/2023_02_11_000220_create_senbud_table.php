<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenbudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senbud', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('name');
            $table->unsignedBigInteger('rombel_id');
            $table->unsignedBigInteger('rayon_id');
            $table->unsignedBigInteger('senbud_id');
            $table->string('alasan');
            $table->integer('jumlah');
            $table->foreign('senbud_id')->references('id')->on('master_senbud');
            $table->foreign('rombel_id')->references('id')->on('master_rombel');
            $table->foreign('rayon_id')->references('id')->on('master_rayon');
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
        Schema::dropIfExists('senbud');
    }
}
