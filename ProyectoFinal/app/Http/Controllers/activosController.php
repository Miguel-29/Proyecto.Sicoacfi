<?php

namespace App\Http\Controllers;

use App\Models\asset;
use App\Models\environment;
use App\Models\teacher;
use Illuminate\Http\Request;

class activosController extends Controller
{
    public function index(Request $request) {
        $search = $request->get('search');
        $order = $request->get('OrderBy');
        $showtechnology = $request->get('showtechnology');
        $showfurniture = $request->get('showfurniture');
        $order == null ? $asset = asset::orderBy('trademark','asc')
            ->where('trademark','LIKE','%'.$search.'%')
            ->where('category','LIKE','%'.$showtechnology.'%')
            ->where('category','LIKE','%'.$showfurniture.'%')
            ->paginate(8)
        : $asset = asset::orderBy('trademark',$order)
            ->where('trademark','LIKE','%'.$search.'%')
            ->where('category','LIKE','%'.$showtechnology.'%')
            ->where('category','LIKE','%'.$showfurniture.'%')
            ->paginate(8);
        $environment = environment::all();
        $teacher = teacher::all();
        return view('activos.index', compact('asset','teacher','environment','order','search','showtechnology','showfurniture'));
    }
    public function indexBajas() {        
        $asset=asset::onlyTrashed()
            ->paginate(8);
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
        ->with('success','Activo fijo registrado con exito');
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
    public function delete($id){
        $asset=asset::find($id)->delete();
        return redirect()->route('activos.index')
        ->with('danger', 'Activo fijo removido con exito');
    }
}
