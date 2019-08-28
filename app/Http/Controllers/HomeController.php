<?php

namespace App\Http\Controllers;

use App\Win;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
       $this->prepareData( $request);
        $q = $request->session()->get('queryParams',[] );
        //dd( $q );
        return view('home',['wins'=>$this->queryResults( $q ) ]);
    }


    public function prepareData( Request $request){
        $r = [];
        for( $ii=1; $ii<6; $ii++){
              $tmp = (int) $request->input('sel_'.$ii );
              if( $tmp > 0 )
                  $r['col_'.$ii] = $tmp;


        }
        if( count( $r ) )
            $request->session()->put('queryParams', $r);
    }


   public function queryResults( $qs ){
          $wins = Win::select('*');
          // dd( ( count($qs) > 0 ) );
        if( count($qs) > 0 ){
              foreach( $qs as $key => $val )
                    $wins->where($key,  '=',  $val);
        }
        return $wins->paginate(20);
   }

}
