<?php

namespace App\Http\Resources;
use App\Http\Controllers\ContratoController;


use Illuminate\Http\Resources\Json\JsonResource;

class ContratoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nombre_cliente' => $this->cliente->nombreCliente,
            'apellido_cliente' => $this->cliente->apellidoCliente,
            'cedula_cliente' => $this->cliente->cedulaCliente,
            'nombre_personal' => $this->personal->nombrePersonal,
            'apellido_personal' => $this->personal->apellidoPersonal,
            'cedula_personal' => $this->personal->cedulaPersonal,
            'num_contrato' => $this->numContrato,
            'costo' => $this->costo,
            'fecha_evento' => $this->fechaEvento,
            'lugar_evento' => $this->lugarEvento,
        ];
    }
}
