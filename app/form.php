<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model ;

class form extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'form';
    protected $guarded = [];
}
