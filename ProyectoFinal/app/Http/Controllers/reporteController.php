<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteController extends Controller
{
    public function download()
    {
        $pdf = \PDF::loadView('reportes.activosFecha');    
        return $pdf->download('archivo.pdf');
    }
}
