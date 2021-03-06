<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\environment;
use App\Models\teacher;
use Illuminate\Http\Request;

class activosController extends Controller
{
    public function index(Request $request) {
    $order = $request->get('OrderBy');
    $order == null ? $asset = asset::orderBy('trademark','asc')->get()
        : $asset = asset::orderBy('trademark',$order)
        ->get();
    $environment = environment::all();
    $teacher = teacher::all();
        return view('activos.index', compact('asset','teacher','environment','order'));
    }
    public function indexBajas() {
        $asset = asset::all();
        return view('bajasActivos.index', compact('asset'));
    }
    public function create() {
        $teacher = teacher::all();
        $environment = environment::all();
        return view('activos.create', compact('teacher','environment'));
    }
    public function store(Request $request) {
        $asset = asset::create($request->all());
        return redirect()->route('activos.index')
        ->with('success','Activo fijo registrado con exito');;
    }
    public function edit($id) {
        $asset=asset::find($id);
        $environment = environment::all();
        $teacher = teacher::all();
        return view('activos.edit',compact('environment','teacher','asset'));
    }
    public function update(Request $request,$id) {
        $asset=asset::find($id)->update($request->all());
        return redirect()->route('activos.index')
        ->with('success','Activo fijo actualizado con exito');;
    }
    public function categorias() {
        $asset = asset::all();
        $environment = environment::all();
        $teacher = teacher::all();
        return view('categorias.index', compact('asset','teacher','environment'));
    }
}
