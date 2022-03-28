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
            $table->integer('nim');
            $table->string('nama');
            $table->string('noHp','13');
            $table->string('kotaLahir');
            $table->string('jk');
            $table->date('tanggalLahir');
            $table->string('prodi');
            $table->string('tahunLulus');
            $table->text('alamat');
            $table->string('kodePos','11');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('email');
            $table->string('pekerjaan');
            $table->string('jp');
            $table->string('namaPerusahaan');
            $table->string('alamatPerusahaan');

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
