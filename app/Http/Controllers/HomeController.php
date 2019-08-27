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
        for( $ii=1; $ii<9; $ii++){
              $tmp = (int) $request->input('sel_'.$ii );
              if( $tmp > 0 )
                  $r[] = $tmp;


        }
        sort($r);
        if( count( $r ) )
            $request->session()->put('queryParams', $r);
    }

   public function whereOne(array $q){
        return Win::where('col_1',  '=',  $q[0])
                  ->paginate(15);
   }

   public function whereTwo(array $q ){
        return Win::where('col_1',  '=',  $q[0])
                  ->where('col_2', '=',  $q[1])
                  ->paginate(15);
   }
   public function whereThree(array $q){
        return Win::where('col_1',  '=',  $q[0])
                     ->where('col_2', '=',  $q[1])
                     ->where('col_3', '=',  $q[2])
                     ->paginate(15);
   }

   public function whereFour(array $q){
        return Win::where('col_1',  '=',  $q[0])
                     ->where('col_2', '=',  $q[1])
                     ->where('col_3', '=',  $q[2])
                     ->where('col_4', '=',  $q[3])
                     ->paginate(15);
   }

   public function whereFive(array $q){
     return Win::where('col_1',  '=',  $q[0])
                  ->where('col_2', '=',  $q[1])
                  ->where('col_3', '=',  $q[2])
                  ->where('col_4', '=',  $q[3])
                  ->where('col_5', '=',  $q[4])
                  ->paginate(15);
   }

   public function whereSix(array $q){
     return Win::where('col_1',  '=',  $q[0])
                  ->where('col_2', '=',  $q[1])
                  ->where('col_3', '=',  $q[2])
                  ->where('col_4', '=',  $q[3])
                  ->where('col_5', '=',  $q[4])
                  ->where('col_6', '=',  $q[5])
                  ->paginate(15);
   }

   public function whereSeven(array $q){
     return Win::where('col_1',  '=',  $q[0])
                  ->where('col_2', '=',  $q[1])
                  ->where('col_3', '=',  $q[2])
                  ->where('col_4', '=',  $q[3])
                  ->where('col_5', '=',  $q[4])
                  ->where('col_6', '=',  $q[5])
                  ->where('col_7', '=',  $q[6])
                  ->paginate(15);
   }

   public function whereEight(array $q){

     return Win::where('col_1',  '=',  $q[0])
                  ->where('col_2', '=',  $q[1])
                  ->where('col_3', '=',  $q[2])
                  ->where('col_4', '=',  $q[3])
                  ->where('col_5', '=',  $q[4])
                  ->where('col_6', '=',  $q[5])
                  ->where('col_7', '=',  $q[6])
                  ->where('col_8', '=',  $q[7])
                  ->paginate(15);
   }
   public function queryResults(array $data){

     switch (count( $data ) ) {
         case 1:
              return $this->whereOne( $data);
         case 2:
              return $this->whereTwo( $data);
         case 3:
              return $this->whereThree( $data);
         case 4:
              return $this->whereFour( $data);
         case 5:
              return $this->whereFive( $data);
         case 6:
              return $this->whereSix( $data);
         case 7:
              return $this->whereSeven( $data);
         case 8:
              return $this->whereEight( $data);
          default:
          return Win::paginate(15);

     }

   }

}
