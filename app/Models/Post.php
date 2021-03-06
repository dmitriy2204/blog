<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
	
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Models\Tag');
    }
    
    public function sections()
    {
        return $this->belongsToMany('App\Models\Section');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }


}
