<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacion;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class ReservacionController extends Controller {
    public function buscar() {
        $reservacion = Reservacion::where('id', request('folio'))->first();
        return $reservacion;
    }
    public function guardarUsuario() {
        $usuario = new Usuario;
        $usuario->nombre = request('nombre');
        $usuario->apellido = request('apellido');
        $usuario->fecha = request('fecha');
        $usuario->correo = request('correo');
        $usuario->numero = request('numero');
        $usuario->rfc = request('rfc');
        $usuario->usuario = request('usuario');
        $usuario->save();
    }
    public function guardar() {
        $reservacion = new Reservacion;
        $reservacion->rfc = request('rfc');
        $reservacion->id_mesa = request('mesa');
        $reservacion->id_horario = request('horario');
        $reservacion->factura = request('factura');
        $reservacion->estatus = request('mesa').','.request('horario').','.(request('horario')+1);
        $reservacion->save();
        return $reservacion->id;
    }
    public function actualizar() {
        $reservacion = Reservacion::where('id', request('folio'))->first();
        $reservacion->id_mesa = request('mesa');
        $reservacion->id_horario = request('horario');
        $reservacion->factura = request('factura');
        $reservacion->save();
        return $reservacion;
    }
    public function filtros() {
        $mesas = DB::table('mesas')->get();
        $horarios = DB::table('horarios')->get();
        $obj['mesas'] = $mesas;
        $obj['horarios'] = $horarios;
        return $obj;
    }
}