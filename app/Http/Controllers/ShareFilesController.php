<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareFilesController extends Controller
{
    public function index()
    {
        $archivosCompartidos = ShareFilesController::all();
        return view('archivos_compartidos.index', compact('archivosCompartidos'));
    }

    public function show($hash)
    {
        $archivoCompartido = ShareFilesController::findOrFail($hash);
        return view('archivos_compartidos.show', compact('archivoCompartido'));
    }
}