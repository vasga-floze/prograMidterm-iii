<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Recetas as RecetasResource;
use App\Models\Recetas;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET
        $recetas=Recetas::all();

        //coleccion
        return RecetasResource::collection($recetas);
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
        //guardar y actualizar
        $receta = $request->isMethod('put') ? Recetas::findOrFail($request->id) : new Recetas;
        $receta->id = $request->input('id');
        $receta->nombre = $request->input('nombre');
        $receta->descripcion = $request->input('descripcion');
        $receta->ingredientes = $request->input('ingredientes');
        $receta->tpreparacion = $request->input('tpreparacion');
        $receta->dificultad = $request->input('dificultad');
        $receta->imagen = $request->input('imagen');
        $receta->estado = $request->input('estado');

        if($receta->save()){
            return new RecetasResource($receta);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //obtener por id
        $receta = Recetas::findOrFail($id);

        //retornar datos
        return new RecetasResource($receta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        //eliminar
        $receta=Recetas::findorFail($id);

        if($receta->delete()){
            return new RecetasResource($receta);
        }
    }
}
