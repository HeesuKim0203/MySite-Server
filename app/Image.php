<?php

namespace App ;

use Illuminate\Database\Eloquent\Model ;

class Image extends Model
{
    public $timestamps = false ;
    protected $fillable = [ 'id', 'url' ] ;

    public function create_column($url) {
        $result = self::create([
            'url' => $url
        ]) ;

        return $result ;
    }

    public function get_all_column () {
        $result = self::select('*')
            ->get() ;

        return $result ;
    }

    public function delete_column($id) {
        $url = self::select('url')->where('id', '=', $id)->get() ;    

        $fileName = explode('/', $url[0]->url) ;

        $result = self::where('id', '=', $id)->delete() ;

	if($result) {
		return $fileName[count($fileName) - 1];
	}else {
		return false ;
	}
    }
}
