<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <a href="{{ route('empleados.create') }}">Registrar Nuevo Empleado</a>
    
    <ul>
        @foreach($empleados as $empleado)
            <li>
                {{ $empleado->nombre }} {{ $empleado->apellido }} ({{ $empleado->puesto }})
                <a href="{{ route('empleados.show', ['empleado' => $empleado->id]) }}">Ver Detalles</a>
            </li>
        @endforeach
    </ul>
</body>
</html>