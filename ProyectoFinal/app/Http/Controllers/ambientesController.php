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
        return redirect()->route('aulas.index');
    }
}
