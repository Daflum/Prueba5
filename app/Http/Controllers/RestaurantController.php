<?php

namespace Restauapp\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Restauapp\Restaurant;

use Illuminate\Http\Request;
use Restauapp\User;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request)
    {

        $resta = Restaurant::create([

            'Nombre' => $request['name'],
            'hora_apertura' => $request['horaA'],
            'hora_cierre' => $request['horaC'],


        ]); $user=Auth::user();
        $user->Restaurant_id=$resta['id'];
        $user->save();


        return view('homeR',compact('user','resta'));
    //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nombre)
    {

        $resta=Restaurant::where('nombre',$nombre)->first();

return view ('ModificarHora',compact('resta'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $nombre)
    {

           $user=Auth::user();
        $resta=Restaurant::where('Nombre',$nombre)->first();

        $resta->hora_apertura=$request['horaA'];
        $resta->hora_cierre=$request['horaC'];
        $resta->save();


        return view('homeR',compact('user','resta'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
