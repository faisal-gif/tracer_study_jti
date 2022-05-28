<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class kirimForm extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'kirimForm';
    protected $guarded = [];
}
