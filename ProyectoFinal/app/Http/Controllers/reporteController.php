<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\asset;
use App\Models\environment;
use App\Models\teacher;

class reporteController extends Controller
{
    public function download(Request $request)
    {
        $fecha = $request->get('Fecha');
        $fechados = $request->get('Fechados');
        $asset = asset::whereBetween('fechaIngreso', [$fecha, $fechados])
            ->orderBy('marca','asc')
            ->get();
        $pdf = \PDF::loadView('reportes.activosFecha', compact('asset','fecha','fechados'));
        return $pdf->download('ReporteActivosFijos.pdf');
    }
    public function index() {
        return view('reportes.index');
    }
}
