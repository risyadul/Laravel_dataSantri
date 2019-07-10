<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTadarusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tadarus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tanggal');
            $table->integer('waktu');
            $table->string('surah');
            $table->integer('start_ayat');
            $table->integer('end_ayat');
            $table->text('keterangan');
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
        Schema::dropIfExists('tadarus');
    }
}
