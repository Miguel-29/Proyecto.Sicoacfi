<?php

namespace App\Http\Controllers;

use App\Models\activos;
use App\Models\ambientes;
use App\Models\profesores;
use Illuminate\Http\Request;

class activosController extends Controller
{
    public function index() {
        $orden = 'asc';
        $activos = activos::orderBy('marca',$orden)->get();
        $ambientes = ambientes::all();
        $profesores = profesores::all();
        return view('activos.index', compact('activos','profesores','ambientes','orden'));
    }
    public function indexBajas() {
        $activos = activos::all();
        return view('bajasActivos.index', compact('activos'));
    }
    public function create() {
        $profesores = profesores::all();
        $ambientes = ambientes::all();
        return view('activos.create', compact('profesores','ambientes'));
    }
    public function store(Request $request) {
        $activos = activos::create($request->all());
        return redirect()->route('activos.index')
        ->with('success','Activo fijo registrado con exito');;
    }
    public function edit($id) {
        $activos=activos::find($id);
        $ambientes = ambientes::all();
        $profesores = profesores::all();
        return view('activos.edit',compact('ambientes','profesores','activos'));
    }
    public function update(Request $request,$id) {
        $activos=activos::find($id)->update($request->all());
        return redirect()->route('activos.index')
        ->with('success','Activo fijo actualizado con exito');;
    }
    public function categorias() {
        $activos = activos::all();
        $ambientes = ambientes::all();
        $profesores = profesores::all();
        return view('categorias.index', compact('activos','profesores','ambientes'));
    }
}
