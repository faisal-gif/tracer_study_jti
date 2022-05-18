<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\testimoni;

class biodata extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'biodata';
    protected $guarded = [];
    protected function testimoni()
    {
        return $this->hasMany('App\testimoni','nim','idUser');
}
}