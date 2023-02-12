<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkskulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekskul', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('name');
            $table->unsignedBigInteger('rombel_id');
            $table->unsignedBigInteger('rayon_id');
            $table->unsignedBigInteger('ekskul_id');
            $table->string('alasan');
            $table->integer('jumlah');
            $table->foreign('ekskul_id')->references('id')->on('master_ekskul');
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
        Schema::dropIfExists('ekskul');
    }
}
