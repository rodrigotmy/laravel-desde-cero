<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
	protected $guarded = [];
    protected $table = 'musics';
	public function getRouteKeyName()
    {
    	return 'url';
    }
}
