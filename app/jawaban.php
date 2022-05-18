<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model ;
class jawaban extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'jawaban';
    protected $guarded = [];

}
