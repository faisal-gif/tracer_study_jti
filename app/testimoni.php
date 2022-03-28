<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class testimoni extends Model
{
    protected $primaryKey = 'idUser';
    public $fillable= ['idUser','testimoni','id_testimoni', 'status'];
}

