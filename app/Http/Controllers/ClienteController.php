<?php
 
namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function mostrartodo()
    {
        return Cliente::all();
    }

    public function show($cedulaCliente)
    {
        $cliente = Cliente::find($cedulaCliente);
        
        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        return $cliente;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'cedulaCliente' => 'required|unique:cliente', 
        'nombreCliente' => 'required', 
        'apellidoCliente' => 'required', 
        'email' => 'required|email|unique:cliente',
        'direccion' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $cliente = Cliente::create($request->all());

        return response()->json(['message' => 'Cliente creado con éxito'], 201);
    }

    public function update(Request $request, $cedulaCliente)
{
    $cliente = Cliente::where('cedulaCliente', $cedulaCliente)->first();

    if (!$cliente) {
        return response()->json(['message' => 'Cliente no encontrado'], 404);
    }

    $validator = Validator::make($request->all(), [
        'cedulaCliente' => 'required|:cliente,cedulaCliente,'. $cedulaCliente,
        'nombreCliente' => 'required',
        'apellidoCliente' => 'required',
        'email' => 'required|email|unique:cliente',
        'direccion' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 400);
    }

    $cliente->update($request->all());

    return response()->json(['message' => 'Cliente actualizado con éxito'], 200);
}


    public function destroy($cedulaCliente)
    {
        $cliente = Cliente::find($cedulaCliente);
        

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $cliente->delete();

        return response()->json(['message' => 'Cliente eliminado con éxito'], 204);
    }
}
