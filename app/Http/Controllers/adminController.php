<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdmin()
    {
        return view('admin');
    }

    public function showRegistro()
    {
        return view('create');
    }

    public function showCitas()
    {
        return view('citas');
    }

    public function showClientes()
    {
        return view('clientes');
    }

    public function showPersonal()
    {
        return view('personal');
    }

    public function logout()
    {
        // Aquí puedes agregar lógica para cerrar sesión si es necesario
        return view('admin');
    }
}
