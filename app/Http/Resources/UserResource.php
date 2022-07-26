<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nombre'=>$this->name,
            'correo'=>$this->email,
            'domicilio'=>$this->domicilio->domicilio,
            'numero exterior'=>$this->domicilio->numero_exterior,
            'colonia'=>$this->domicilio->colonia,
            'cp'=>$this->domicilio->cp,
            'ciudad'=>$this->domicilio->ciudad,

        ];
    }
}
