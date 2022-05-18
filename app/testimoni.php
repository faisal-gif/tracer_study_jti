<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\biodata;

class testimoni extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'testimoni';
    protected $guarded = [];
  
    public function biodata()
    {
        return $this->belongsTo(biodata::class,'idUser','nim');
      
    }
}

