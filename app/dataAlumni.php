<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataAlumni extends Model
{
    public $fillable= ['nim','nama','jk','prodi','tahunLulus'];
}
