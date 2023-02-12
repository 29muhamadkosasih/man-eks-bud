<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenSenbudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_senbud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nis_id');
            $table->string('status');
            $table->string('nilai');
            $table->time('time');
            $table->foreign('nis_id')->references('id')->on('senbud');
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
        Schema::dropIfExists('absen_senbud');
    }
}
