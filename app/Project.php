<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $guarded = [];

    public function getRouteKeyName()
    {
    	return 'url';
    }

    // se nombra en singular pues seria algo tipo: el $project->category
    public function category()
    {
    	return $this->belongsTo(Category::class);
    	// relación que pertenece a Modelo Category
    	// no olviar importar el namespace 'Category'
    }
}