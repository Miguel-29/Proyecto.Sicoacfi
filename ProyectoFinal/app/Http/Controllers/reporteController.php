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
        if ($fecha < $fechados) {
        $asset = asset::whereBetween('date_admission', [$fecha, $fechados])
            ->orderBy('trademark','asc')
            ->get();
        $pdf = \PDF::loadView('reportes.activosFecha', compact('asset','fecha','fechados'));
        return $pdf->download('ReporteActivosFijos.pdf');
        } else {
            return redirect()->route('reportes.index') 
            ->with('error','Por favor la fecha de corte no debe ser mayor a la fecha inicial.');
        }
    }
    public function index() {
        return view('reportes.index');
    }
}
