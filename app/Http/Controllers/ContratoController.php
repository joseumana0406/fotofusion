<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Personal;
use App\Models\Contrato;
use Illuminate\Http\Request;
use App\Http\Resources\ContratoResource;

class ContratoController extends Controller
{
    public function mostrarContrato()
    {
        $contratos = Contrato::with(['cliente', 'personal'])->get();

        foreach($contratos as $contrato) {
            echo 'Nombre Cliente: ' . $contrato->cliente->nombreCliente . '<br>';
            echo 'Apellido Cliente: ' . $contrato->cliente->apellidoCliente . '<br>';
            echo 'Cedula Cliente: ' . $contrato->cliente->cedulaCliente . '<br>';

            echo 'Nombre Personal: ' . $contrato->personal->nombrePersonal . '<br>';
            echo 'Apellido Personal: ' . $contrato->personal->apellidoPersonal . '<br>';
            echo 'Cedula Personal: ' . $contrato->personal->cedulaPersonal . '<br>';

            echo 'Número Contrato: ' . $contrato->numContrato . '<br>';
            echo 'Costo: ' . $contrato->costo . '<br>';
            echo 'Fecha Evento: ' . $contrato->fechaEvento . '<br>';
            echo 'Lugar Evento: ' . $contrato->lugarEvento . '<br>';
            echo '----------------------------------------<br>';
        }
    }

    public function mostrarInformacion()
{
    $contratos = Contrato::with(['cliente', 'personal'])->get();
    $contratosResource = ContratoResource::collection($contratos);
    return view('contratos', ['contratos' => $contratosResource]);
}

}

