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
            echo 'Nombre Cliente: ' . $contrato->cliente->nombreCliente ."\n" ;
            echo 'Apellido Cliente: ' . $contrato->cliente->apellidoCliente ."\n";
            echo 'Cedula Cliente: ' . $contrato->cliente->cedulaCliente . "\n\n";

            echo 'Nombre Personal: ' . $contrato->personal->nombrePersonal . "\n";
            echo 'Apellido Personal: ' . $contrato->personal->apellidoPersonal . "\n";
            echo 'Cedula Personal: ' . $contrato->personal->cedulaPersonal . "\n\n";

            echo 'Número Contrato: ' . $contrato->numContrato . "\n" ;
            echo 'Costo: ' . $contrato->costo . "\n";
            echo '</br>'.'Fecha Evento: ' . $contrato->fechaEvento . "\n";
            echo 'Lugar Evento: ' . $contrato->lugarEvento ."\n";
            echo '----------------------------------------'. "\n";
        }
    }

    public function mostrarInformacion()
{
    $contratos = Contrato::with(['cliente', 'personal'])->get();
    $contratosResource = ContratoResource::collection($contratos);
    //dd($contratos); 
    return view('contratos', ['contratos' => $contratosResource]);
}

}

