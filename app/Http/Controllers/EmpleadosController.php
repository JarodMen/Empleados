<?php


    //
use App\Models\Empleado;
use Illuminate\Http\Request;

public function index()
{
    $empleados = Empleado::all();
    return view('lista_empleados', compact('empleados'));
}

public function create()
{
    return view('empleados.create');
}

public function store(Request $request)
{
    $request->validate([
        'email' => 'unique:empleados',
        // otras reglas de validación
    ]);

    Empleado::create($request->all());

    return redirect()->route('empleados.create')
        ->with('success', 'Empleado registrado exitosamente.');
}
