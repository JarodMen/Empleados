<!DOCTYPE html>
<html>
<head>
    <title>Registro de Empleado</title>
</head>
<body>
    <h1>Registro de Nuevo Empleado</h1>
    
    <form action="{{ route('empleados.store') }}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre">
        <!-- Agregar más campos para la información del empleado -->
        <button type="submit">Registrar Empleado</button>
    </form>
</body>
</html>