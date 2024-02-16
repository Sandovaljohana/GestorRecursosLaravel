<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivoCompartido extends Model
{
    use HasFactory;

    protected $table = 'archivos_compartidos';

    protected $primaryKey = 'hash';
    public $incrementing = false;

    protected $fillable = [
        'id_archivo',
        'id_usuario_compartido',
    ];

    public function archivo()
    {
        return $this->belongsTo(Archivo::class, 'id_archivo');
    }

    public function usuarioCompartido()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario_compartido');
    }
}