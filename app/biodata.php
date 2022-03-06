<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    public $fillable= ['nim','nama','noHp','kotaLahir','jk','tanggalLahir','prodi','tahunLulus','alamat','kodePos','provinsi','kota'];
}
