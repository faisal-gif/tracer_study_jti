<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class pertanyaan extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'pertanyaan';
    protected $guarded = [];
}
