<?php

namespace App\Http\Controllers;

use App\Win;
use App\Rwin;
use App\Http\Requests\GameFormRequest;

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
     * @param GameFormRequest $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(GameFormRequest $gfr)
    {
       $q = $gfr->getQueryParams();
        //dd( $q );
        return view('home',['wins'=>Win::queryResults( $q ) ]);
    }

    /**
     * Show the application dashboard.
     * @param GameParamsRequest $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gametwo(GameFormRequest $gfr)
    {
        $q = $gfr->getgameQueryParams();

        return view('gametwo',['wins'=> Rwin::queryResults( $q ) ]);
    }


}
