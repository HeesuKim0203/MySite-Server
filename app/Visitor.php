<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['id', 'updated_at', 'created_at', 'ip'] ;

    public function create_column($ip) 
    {
        $result = self::create([
            'ip' => $ip
        ]) ;
        return $result ;
    }

    public function check_ip($ip)
    {
        
        $result = self::where('created_at',  '>=', date('Y-m-d 00:00:00'))
                    ->where('created_at', '<=', date('Y-m-d 23:59:59'))
                    ->where('ip', '=', $ip)
                    ->get() ;

        return count($result) ? false : true ;

    }

    public function get_all_column() 
    {
        $result = self::select('id', 'created_at')
                    ->get() ;

        return $result ;

    }
}
