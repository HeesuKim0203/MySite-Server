<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	public $timestamps = false ;
	protected $fillable = ['id', 'url'] ;

	public function create_column($url) {
       		 $result = self::create([
        	    'url' => $url
	         ]) ;
	
     	   return $result ;
    	}
}
