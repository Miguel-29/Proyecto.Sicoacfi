<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfesoresController extends Controller
{
    public function index() {
        $teacher = teacher::paginate(8);        
        return view('profesores.index', compact('teacher'));
    }
    public function create() {
        return view('profesores.create');
    }
    public function store(Request $request) {
        $request->validate([
            'name'=>'required|string',
            'lastnames'=>'required|string',
            'degree'=>'required|string',
            'document'=>'required|number|min:7'
        ]);
        $teacher=teacher::create($request->all());
        return redirect()->route('profesores.index')
        ->with('success','Profesor registrado con exito');
    }
    public function edit($id) {
        $teacher = teacher::find($id);
        return view('profesores.edit',compact('teacher'));
    }
    public function update(Request $request,$id) {
        $request->validate([
            'name'=>'required|string',
            'lastnames'=>'required|string',
            'degree'=>'required|string',
            'document'=>'required|number|min:7'
        ]);
        $teacher=teacher::find($id)->update($request->all());
        return redirect()->route('profesores.index')
        ->with('success','Profesor actualizado con exito');;
    }
}
