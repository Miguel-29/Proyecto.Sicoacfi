<?php

namespace App\Http\Controllers;

use App\Models\profesores;
use Illuminate\Http\Request;

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
        return redirect()->route('profesores.index');
    }
}
