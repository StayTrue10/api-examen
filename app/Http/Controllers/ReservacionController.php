<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacion;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class ReservacionController extends Controller {
    public function buscar() {
        $reservacion = Reservacion::where('rfc', request('rfc'))->first();
        return $reservacion;
    }
    public function guardarUsuario() {
        $reservacion = new Usuario;
        $reservacion->nombre = request('nombre');
        $reservacion->apellido = request('apellido');
        $reservacion->fecha = request('fecha');
        $reservacion->correo = request('correo');
        $reservacion->numero = request('numero');
        $reservacion->rfc = request('rfc');
        $reservacion->usuario = request('usuario');
        $reservacion->save();
    }
    public function guardar() {
        $reservacion = new Reservacion;
        $reservacion->rfc = request('rfc');
        $reservacion->id_mesa = request('mesa');
        $reservacion->id_horario = request('horario');
        $reservacion->factura = request('factura');
        $reservacion->save();
        return $reservacion->id;
    }
    public function actualizar() {
        $reservacion = Reservacion::where('rfc', request('rfc'))->first();
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