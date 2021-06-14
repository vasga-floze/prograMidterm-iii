<?php

namespace App\Http\Controllers;

use App\Models\Recetario;
use Illuminate\Http\Request;

class RecetarioController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recetario');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recetario  $recetario
     * @return \Illuminate\Http\Response
     */
    public function show(Recetario $recetario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recetario  $recetario
     * @return \Illuminate\Http\Response
     */
    public function edit(Recetario $recetario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recetario  $recetario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recetario $recetario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recetario  $recetario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recetario $recetario)
    {
        //
    }
}
