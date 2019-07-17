<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class CoordinacionHorario extends Model
{
    protected $table = 'coordinacion_horario';
    protected $fillable =['sala','id_coordinacion',
                            'id_horario'];


    public function coordinacion() {
    	return $this->belongsTo('App\Modules\Coordinacion');
    }
    public function horario() {
    	return $this->belongsTo('App\Modules\Horario');
    }
}
