<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listIsi extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'listIsi';
    protected $guarded = [];
}
