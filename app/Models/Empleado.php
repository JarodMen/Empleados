<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  public function index()
{
    $empleados = Empleado::all();
    return view('lista_empleados', compact('empleados'));
}
  
    protected $fillable = [
        'nombre', 'apellido', 'direccion', 'fecha_nacimiento',
        'puesto', 'salario', 'fecha_contratacion', 'correo_electronico'
    ];

    // Restricción única para correo electrónico
    public function setEmailAttribute($value)
    {
        $this->attributes['correo_electronico'] = strtolower($value);
    }
  public function asistencias()
{
    return $this->hasMany(Asistencia::class);
}
}
