<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [ 'id', 'title', 'text', 'type', 'image_url' ] ;

    public function get_all_column() 
    {
        $result = self::select('*')
                ->get() ;

        return $result ;
    }

    public function create_column($image_url, $title, $text, $type) 
    {
        $result = self::create([
            'title' => $title,
            'image_url' => $image_url,
            'text' => $text,
            'type' => $type,
        ]) ;
        return $result ;
    }

    // public function max_id()
    // {
    //     $result = self::max('id') ;
        
    //     return $result ;
    // }
}
