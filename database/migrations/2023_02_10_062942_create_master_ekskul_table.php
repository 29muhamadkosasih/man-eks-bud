<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterEkskulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_ekskul', function (Blueprint $table) {
            $table->id();
            $table->string('name_ekskul');
            $table->integer('kouta');
            $table->integer('mas_kouta');
            $table->string('day');
            $table->time('time');
            $table->string('desc');
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
        Schema::dropIfExists('master_ekskul');
    }
}
