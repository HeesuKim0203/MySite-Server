<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['id', 'updated_at', 'title', 'url', 'period', 'image', 'description', 'language'] ;

    public function create_column($title, $url, $period, $image, $description, $language) {
	$result = self::create([
	    'language' => $language,
            'title' => $title,
            'url' => $url,
            'period' => $period,
	        'image' => $image,
	        'description' => $description
        ]) ;

        return $result ;
    }

    public function get_all_column() 
    {
        $result = self::select('*')->get() ;

        return $result ;
    }
}
