<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
    'title', 'content'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function profile(){
    	return $this->belongsTo(Profile::class);
    }

}
