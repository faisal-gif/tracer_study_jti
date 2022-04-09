<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class jawaban extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'jawaban';

    protected $fillable = [
        'jawaban'
    ];
}
