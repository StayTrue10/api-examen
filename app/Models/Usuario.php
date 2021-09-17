<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'apellido', 'fecha', 'correo', 'numero', 'rfc', 'usuario'];
}