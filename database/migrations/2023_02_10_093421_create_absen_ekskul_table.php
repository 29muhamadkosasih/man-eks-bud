<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenEkskulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_ekskul', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nis_id');
            $table->string('status');
            $table->string('nilai');
            $table->time('time');
            $table->foreign('nis_id')->references('id')->on('ekskul');

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
        Schema::dropIfExists('absen_ekskul');
    }
}
