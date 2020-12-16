<?php

namespace App ;

use Illuminate\Database\Eloquent\Model ;

class Language extends Model
{
    public $timestamps = false ;
    protected $fillable = [ 'id', 'text'] ;

    public function search_column($language) {

        $result = self::select('*')
            ->where('text', $language)->get() ;

        return $result ;
    }
}
