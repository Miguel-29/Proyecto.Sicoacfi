<?php

namespace App\Http\Controllers;

use App\Models\profesores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfesoresController extends Controller
{
    public function index() {
        $profesores = profesores::all();        
        return view('profesores.index', compact('profesores'));
    }
    public function create() {
        return view('profesores.create');
    }
    public function store(Request $request) {
        $profesores=profesores::create($request->all());
        return redirect()->route('profesores.index')
        ->with('success','Profesor registrado con exito');
    }
    public function edit($id) {
        $profesores = profesores::find($id);
        Log::info('hola');
        return view('profesores.edit',compact('profesores'));
    }
    public function update(Request $request,$id) {
        $profesores=profesores::find($id)->update($request->all());
        return redirect()->route('profesores.index')
        ->with('success','Profesor actualizado con exito');;
    }
}
