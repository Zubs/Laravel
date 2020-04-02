<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Post extends Model
{
    use HasTrixRichText;
    
    protected $guarded = [];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
