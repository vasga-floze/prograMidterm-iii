<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Recetas extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return[
           'id'=>$this->id,
           'nombre'=>$this->nombre,
           'descripcion'=>$this->descripcion,
           'ingredientes'=>$this->ingredientes,
           'tpreparacion'=>$this->tpreparacion,
           'dificultad'=>$this->dificultad,
           'imagen'=>$this->imagen,
           'estado'=>$this->estado,

       ];
    }
}
