<?php

namespace App\Modules;

use Illuminate\Notifications\Notifiable;
use App\Modules\Comuna;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumno extends Authenticatable
{
    use Notifiable;
    protected $guard ='alumno';
    protected $table = 'alumno';
    protected $fillable =['direccion','telefono','celular','password','id_comuna'];
 
    public function comuna() {
    	return $this->belongsTo('App\Modules\Comuna');
    }

    public function tarjetaCredito() {
    	return $this->hasMany('App\Modules\TarjetaCredito');
    }

    public function facturacion() {
    	return $this->hasMany('App\Modules\Facturacion');
    }

    public function historialAlumno() {
    	return $this->hasMany('App\Modules\HistorialAlumno');
    }

    public function mensaje() {
    	return $this->hasMany('App\Modules\Mensaje');
    }

    public function carrera() {
    	return $this->belongsToMany('App\Modules\Carrera', 'alumno_carrera');
    }

    public function registroAccion() {
    	return $this->belongsTo('App\Modules\RegistroDeAccion');
    }

    public function coordinacion() {
    	return $this->belongsToMany('App\Modules\Coordinacion', 'alumno_coordinacion');
    }
}
