<?php

namespace App\Http\Resources;

use App\Models\Cliente;
use App\Models\Personal;
use App\Models\Contrato;
use App\Http\Controllers\ContratoController;


use Illuminate\Http\Resources\Json\JsonResource;

class ContratoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nombreCliente' => $this->cliente->nombreCliente,
            'apellidoCliente' => $this->cliente->apellidoCliente,
            'cedulaCliente' => $this->cliente->cedulaCliente,
            'nombrePersonal' => $this->personal->nombrePersonal,
            'apellidoPersonal' => $this->personal->apellidoPersonal,
            'cedulaPersonal' => $this->personal->cedulaPersonal,
            'numContrato' => $this->numContrato,
            'costo' => $this->costo,
            'fechaEvento' => $this->fechaEvento,
            'lugarEvento' => $this->lugarEvento,
        ];
    }
}
