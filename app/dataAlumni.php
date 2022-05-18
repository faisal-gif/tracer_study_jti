<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model ;

class dataAlumni extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'dataAlumni';
    protected $guarded = [];
}
