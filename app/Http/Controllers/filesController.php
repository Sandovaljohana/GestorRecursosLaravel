<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filesController extends Controller
{
    public function index()
    {
        $archivos = Files::all();
        return view('archivos.index', compact('archivos'));
    }

    public function show($id)
    {
        $archivo = Files::findOrFail($id);
        return view('archivos.show', compact('archivo'));
    }
}