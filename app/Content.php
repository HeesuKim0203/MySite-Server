<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [ 'id', 'title', 'text', 'type', 'image_url', 'description' ] ;

    public function get_all_column() 
    {
	    $result = self::select('id', 'title', 'type', 'image_url', 'created_at')
		->orderBy('id', 'DESC')
		->get() ;

        return $result ;
    }

    public function get_column($id) 
    {
	    $result = self::select('text', 'description')
		    ->where('id', '=', $id)
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

    public function update_text($id, $text)
    {
	    $result = self::where('id', '=', $id)
		->update(['text' => $text]) ;


	    return $result ; 

    } 

    public function update_contents() 
    {
    	$result = self::select('id', 'title', 'image_url', 'type', 'created_at')
		->orderBy('id', 'DESC')
		->limit(9)
	        ->get()	;

	return $result ;
    }
}
