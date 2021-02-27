<?php

namespace App\Http\Controllers;

use App\Models\ambientes;
use Illuminate\Http\Request;

class ambientesController extends Controller
{
    public function index() {
        $ambientes = ambientes::all();
        return view('aulas.index', compact('ambientes'));
    }
    public function create() {
        return view('aulas.create');
    }
    public function store(Request $request) {
        $ambientes = ambientes::create($request->all());
        return redirect()->route('aulas.index')
        ->with('success','Aula registrada con exito');;
    }
    public function edit($id) {
        $ambientes = ambientes::find($id);
        return view('aulas.edit',compact('ambientes'));
    }
    public function update(Request $request,$id) {
        $ambientes=ambientes::find($id)->update($request->all());
        return redirect()->route('aulas.index')
        ->with('success','Aula actualizada con exito');;
    }
}
