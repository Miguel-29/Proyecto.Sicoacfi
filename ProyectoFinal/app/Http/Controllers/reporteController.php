<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activos;
use App\Models\ambientes;
use App\Models\profesores;

class reporteController extends Controller
{
    public function download(Request $request)
    {
        $fecha = $request->get('Fecha');
        $fechados = $request->get('Fechados');
        $activos = activos::orderBy('marca','asc')
        ->get();
        $pdf = \PDF::loadView('reportes.activosFecha', compact('activos','fecha','fechados'));
        return $pdf->download('ReporteActivosFijos.pdf');
    }
    public function index() {
        return view('reportes.index');
    }
}
