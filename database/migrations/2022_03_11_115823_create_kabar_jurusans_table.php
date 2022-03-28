<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabarJurusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabar_jurusans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idUser');
            $table->string('judul');
            $table->string('tag');
            $table->text('kabar');
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
        Schema::dropIfExists('kabar_jurusans');
    }
}
