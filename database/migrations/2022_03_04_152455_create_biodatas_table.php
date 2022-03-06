<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('noHp');
            $table->string('kotaLahir');
            $table->string('jk');
            $table->date('tanggalLahir');
            $table->string('prodi');
            $table->string('tahunLulus');
            $table->text('alamat');
            $table->integer('kodePos');
            $table->string('provinsi');
            $table->string('kota');
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
        Schema::dropIfExists('biodatas');
    }
}
