<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contrato;
use Illuminate\Support\Facades\Validator;

class MostrarCitasController extends Controller
{
    public function mostrarCitas()
    {
        $contratos = Contrato::all();
    return view('citas', ['contratos' => $contratos]);
    }
}
