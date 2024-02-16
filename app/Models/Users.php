<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'correo',
        'palabra_secreta',
        'administrador',
    ];

    public function archivos()
    {
        return $this->hasMany(Files::class, 'id_usuario');
    }

    public function archivosCompartidos()
    {
        return $this->hasMany(ArchivoCompartido::class, 'id_usuario_compartido');
    }
}