<?php

namespace App ;

use Illuminate\Database\Eloquent\Model ;

class Image extends Model
{
    public $timestamps = false ;
    protected $fillable = [ 'id', 'url', 'content_id' ] ;

    public function create_column($url, $content_id) {
        $result = self::create([
            'url' => $url,
            'content_id' => $content_id,
        ]) ;

        return $result ;
    }
}
