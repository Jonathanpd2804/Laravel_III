<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("usuarios.index",compact("users"));
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
     * @param  \App\Http\Requests\StorePrecioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=$request->all();

        
        User::create($datos);

        return redirect("/precios");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Precio  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Precio $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Precio  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view("precios.edit",compact("precio"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrecioRequest  $request
     * @param  \App\Models\Precio  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        dd($request);
        return redirect("/precios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Precio  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Precio $user)
    {
        //
    }

    public function borrar($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
