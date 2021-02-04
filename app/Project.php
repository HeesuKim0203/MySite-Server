<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['id', 'updated_at', 'title', 'url', 'period', 'image'] ;

    public function create_column($title, $url, $period, $image) {
        $result = self::create([
            'title' => $title,
            'url' => $url,
            'period' => $period,
            'image' => $image
        ]) ;

        return $result ;
    }

    public function get_all_column() 
    {
        $result = self::select('*')->get() ;

        return $result ;
    }
}
