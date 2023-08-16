<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function buscar(Request $request)
    {
        $query = $request->input('query');

        $empleados = Empleado::where('nombre', 'like', "%$query%")
            ->orWhere('apellido', 'like', "%$query%")
            ->orWhere('puesto', 'like', "%$query%")
            ->get();

        return view('empleados.lista', compact('empleados'));
    }
}
