<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
	protected $fillable = ['title','body'];
    public function user(){
    	retrun $this->belongs(User::class);
    }

}
