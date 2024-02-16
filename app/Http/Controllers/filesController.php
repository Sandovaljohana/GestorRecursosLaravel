<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filesController extends Controller
{
    public function index()
    {
        $archivos = Archivo::all();
        return view('archivos.index', compact('archivos'));
    }

    public function show($id)
    {
        $archivo = Archivo::findOrFail($id);
        return view('archivos.show', compact('archivo'));
    }
}
