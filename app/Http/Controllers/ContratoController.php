<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Personal;
use App\Models\Contrato;
use Illuminate\Http\Request;
use App\Http\Resources\ContratoResource;
use Illuminate\Support\Facades\Validator;


class ContratoController extends Controller
{
    //funcion para registrar contrato
    public function registrarContrato(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'numContrato' => 'required|unique:contrato', 
        'cedulaCliente' => 'required', 
        'cedulaPersonal' => 'required', 
        'costo' => 'required',
        'fechaEvento' => 'required',
        'lugarEvento' => 'required',

        ]);




    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        try {
            $contrato = Contrato::create($request->all()); 
            return response()->json(['message' => 'Contrato creado con éxito'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el contrato', 'error' => $e->getMessage()], 500);
        }
    }


    // Esta función muestra la información de los contratos en formato texto
    public function mostrarContrato()
    {
        // Obtener todos los contratos junto con la información de cliente y personal relacionados
        $contratos = Contrato::with(['cliente', 'personal'])->get();

    // Iterar a través de la lista de contratos
    foreach($contratos as $contrato) {
        // Mostrar detalles del cliente asociado al contrato
        echo 'Nombre Cliente: ' . $contrato->cliente->nombreCliente ."\n" ;
        echo 'Apellido Cliente: ' . $contrato->cliente->apellidoCliente ."\n";
        echo 'Cedula Cliente: ' . $contrato->cliente->cedulaCliente . "\n\n";

        // Mostrar detalles del personal asociado al contrato
        echo 'Nombre Personal: ' . $contrato->personal->nombrePersonal . "\n";
        echo 'Apellido Personal: ' . $contrato->personal->apellidoPersonal . "\n";
        echo 'Cedula Personal: ' . $contrato->personal->cedulaPersonal . "\n\n";

        // Mostrar detalles específicos del contrato
        echo 'Número Contrato: ' . $contrato->numContrato . "\n" ;
        echo 'Costo: ' . $contrato->costo . "\n";
        echo 'Fecha Evento: ' . $contrato->fechaEvento . "\n";
        echo 'Lugar Evento: ' . $contrato->lugarEvento ."\n";
        echo '----------------------------------------'. "\n";
    }
}

    // Esta función muestra la información de los contratos en una vista
    public function mostrarInformacion()
    {
        // Obtener todos los contratos junto con la información de cliente y personal relacionados
        $contratos = Contrato::with(['cliente', 'personal'])->get();
    
        // Mapear los contratos a un array con los datos necesarios para la vista
        $contratosArray = $contratos->map(function($contrato) {
            return [
                'nombreCliente' => $contrato->cliente->nombreCliente,
                'apellidoCliente' => $contrato->cliente->apellidoCliente,
                'cedulaCliente' => $contrato->cliente->cedulaCliente,
                'nombrePersonal' => $contrato->personal->nombrePersonal,
                'apellidoPersonal' => $contrato->personal->apellidoPersonal,
                'cedulaPersonal' => $contrato->personal->cedulaPersonal,
                'numContrato' => $contrato->numContrato,
                'idServicio' => $contrato->numContrato,
                'tipoServicio' => $contrato->numContrato,
                'costo' => $contrato->costo,
                'fechaEvento' => $contrato->fechaEvento,
                'lugarEvento' => $contrato->lugarEvento,
            ];
        });
    
        // Devolver una vista llamada 'contratos' con el array de contratos
        return view('contratos', ['contratos' => $contratosArray]);
    }
}

