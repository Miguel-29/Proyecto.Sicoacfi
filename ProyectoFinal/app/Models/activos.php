<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activos extends Model
{
    use HasFactory;
    protected $table='activos';
    protected $primaryKey='id';
    protected $fillable= [
        'marca',
        'color',
        'referencia',
        'numeroSerial',
        'fechaIngreso',
        'mantenimiento',
        'categoria',
        'idAula',
        'idProfesor',
        'created_at',
        'updated_at'
    ];
}
