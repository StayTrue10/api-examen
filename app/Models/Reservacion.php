<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model {
    protected $table = 'reservaciones';
    protected $fillable = ['rfc', 'id_mesa', 'id_horario', 'factura'];
}