<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    protected $table = 'carrera';
    protected $fillable =['nombre','codigo_carrera','arancel',
                        'id_departamento','id_coordinador_docente'];

    public function planDeEstudios() {
    	return $this->hasMany('App\Modules\PlanDeEstudios');
    }

    public function coordinadorDocente() {
    	return $this->belongsTo('App\Modules\CoordinadorDocente');
    }

    public function alumno() {
    	return $this->belongsToMany('App\Modules\Alumno', 'alumno_carrera');
    }
}
