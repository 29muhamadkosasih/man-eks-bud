<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterSenbudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_senbud', function (Blueprint $table) {
            $table->id();
            $table->string('name_senbud');
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
        Schema::dropIfExists('master_senbud');
    }
}
