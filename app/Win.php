<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Win extends Model
{

    /**
    * Scope a query to only include popular users.
    *
    * @param  \Illuminate\Database\Eloquent\Builder  $query
    * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopequeryResults($query, array $qs, int $paginate=20 )
    {
        $query->select('*');
        // dd( ( count($qs) > 0 ) );
        if( count($qs) > 0 ){
              foreach( $qs as $key => $val )
                    $query->where($key,  '=',  $val);
        }
        return $query->paginate( $paginate );
    }



}
