<?php

namespace App\Http\Controllers;

use App\Models\environment;
use Illuminate\Http\Request;

class ambientesController extends Controller
{
    public function index() {
        $environment = environment::paginate(8);
        return view('aulas.index', compact('environment'));
    }
    public function create() {
        return view('aulas.create');
    }
    public function store(Request $request) {
        $environment = environment::create($request->all());
        return redirect()->route('aulas.index')
        ->with('success','Aula registrada con exito');;
    }
    public function edit($id) {
        $environment = environment::find($id);
        return view('aulas.edit',compact('environment'));
    }
    public function update(Request $request,$id) {
        $environment=environment::find($id)->update($request->all());
        return redirect()->route('aulas.index')
        ->with('success','Aula actualizada con exito');;
    }
    public function delete($id){
        $environment=environment::find($id)->delete();
        return redirect()->route('aulas.index')
        ->with('danger', 'Activo fijo removido con exito');
    }
}
