<?php

namespace App;

use  \drupol\phpermutations\Generators\Permutations;

class Rwin
{

    /**
    *
    * @param  array  $qs
    */
    public static function queryResults( array $qs)
    {
        $qs = array_values($qs);
        if(  count( $qs ) < 5 )
            $qs = self::buildFiveNumbers( $qs);
        return new Permutations($qs, 5);
    }

    public static function buildFiveNumbers( array $param ){
        
        while ( count( $param ) < 5 ) {
          $randNum = rand(1,16);
          if( ! in_array( $randNum, $param ) )
                array_push( $param, $randNum );
        }
        return $param;
    }

}
