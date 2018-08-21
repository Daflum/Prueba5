<?php

namespace Restauapp\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Restauapp\Restaurant;


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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['Cliente', 'Restaurant']);

        if($request->user()->hasRole('Restaurant')) {

            $user = Auth::user();
$resta = Restaurant::Where('id', $user['Restaurant_id'])->first();

            return view('homeR',compact('user', 'resta'));
        }
        else

$resta = Restaurant::all();
            return view('home',compact('resta'));




    }
}
