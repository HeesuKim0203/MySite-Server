<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [ 'id', 'title', 'language_id', 'created_at', 'updated_at' ] ;

    public function get_all_column() 
    {
        $result = self::select('*')
                ->join('images', 'contents.id', 'images.content_id')
                ->join('texts', 'contents.id', 'texts.content_id')
                ->get() ;

        return $result ;
    }

    public function create_column($title, $language_id) 
    {
        $result = self::create([
            'title' => $title,
            'language_id' => $language_id,
        ]) ;

        return $result ;
    }

    public function max_id()
    {
        $result = self::max('id') ;
        
        return $result ;
    }
}
