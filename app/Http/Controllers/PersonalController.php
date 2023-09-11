<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('cedulaPersonal', 'contraseña');

        $personal = Personal::where('cedulaPersonal', $credentials['cedulaPersonal'])
                            ->where('contraseña', $credentials['contraseña'])
                            ->first();

        if ($personal) {
            // Aquí puedes establecer cualquier lógica de sesión, por ejemplo:
            // $request->session()->put('personal_id', $personal->id);

            return redirect()->route('admin');
        } else {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }
    }
}
