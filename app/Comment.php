<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [ 'id', 'user_name', 'text', 'password', 'content_id' ] ;

    public function create_tuple($user_name, $text, $password, $content_id) {
        $result = self::create([
            'user_name' => $user_name,
            'text' => $text,
            'password' => $password,
            'content_id' => $content_id
        ]) ;

        return $result ;
    }

    public function id_select_tuple($id) {
        $result = self::select('id, user_name, text, content_id', 'update_at') 
                        ->where('content_id', '=', $id)
                        ->get() ;

        return $result ;
    }

    // 체크 함수
    public function check_tuple($user_name, $password, $id) {
        $result = self::where('user_name', '=', $user_name)
                     -> where('password', '=', $password)
                     -> where('id', '=', $id)
                     ->get() ;
                     
        return $result ? true : false ;
    }
 
    public function delete_tuple($id) {

        $result = self::where('id', '=', $id)
                    -> delete() ;

        return $result ;
    }

    public function update_tuple($id, $text) {
        
        $result = self::where('id', '=', $id)
                    -> update([
                        'text' => $text
                    ]) ;

        return $result ;
    }
}
