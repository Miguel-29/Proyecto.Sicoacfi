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
        $teacher = teacher::select('teachers.id','teachers.name','teachers.lastnames')
            ->join('assets','teachers.id','=','assets.idteacher')
            ->get();
        $environment = environment::select('environments.id','environments.code')
            ->join('assets','environments.id','=','assets.idenvironment')
            ->get();
        // dd($environment);
        $asd = 0;
        return view('activos.index', compact('asset','teacher','environment','order','search','showtechnology','showfurniture','asd'));
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
        $request->validate([
            'trademark' => 'required',
            'serial_number' => 'required',            
            'reference' => 'required',            
            'date_admission' => 'required|date',            
            'maintenance' => 'nullable|date',            
            'color' => 'required|string',
            'category' => 'required',
            'idenvironment' => 'nullable|numeric',
            'idteacher' => 'nullable|numeric',
        ]);
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
        $request->validate([
            'trademark' => 'required',
            'serial_number' => 'required',            
            'reference' => 'required',            
            'date_admission' => 'required|date',            
            'maintenance' => 'nullable|date',            
            'color' => 'required|string',
            'category' => 'required',
            'idenvironment' => 'nullable|numeric',
            'idteacher' => 'nullable|numeric',
        ]);
        $asset=asset::find($id)->update($request->all());
        return redirect()->route('activos.index')
        ->with('success','Activo fijo actualizado con exito');;
    }
    public function updates(Request $request,$id) {
        $asset = asset::where('idenvironment','LIKE','%'.$id.'%')->update([
            'idenvironment' => 1
        ]);
        return redirect()->route('aulas.delete',$id);
        // $asset=asset::find($id)->update($request->all());
        // return redirect()->route('aulas.delete');
    }
    public function delete($id){        
        $asset=asset::find($id)->delete();
        return redirect()->route('activos.index')
        ->with('danger', 'Activo fijo removido con exito');
    }
}
