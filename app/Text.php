<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    public $timestamps = false ;
    protected $fillable = [ 'id', 'css', 'html', 'content_id'] ;

    public function create_column($css, $html, $content_id) 
    {
        $result = self::create([
            'css' => $css,
            'html' => $html,
            'content_id' => $content_id
        ]) ;

        return $result ;
    }
}
