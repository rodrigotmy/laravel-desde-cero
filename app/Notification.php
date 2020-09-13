<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	protected $fillable = ['url', 'email'];
    // protected $table = 'notifications';
	public function getRouteKeyName() {
		return 'url';
	}
}
