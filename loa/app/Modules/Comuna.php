<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Modules\Alumno;

class Comuna extends Model
{
    
    protected $table = 'comuna';
    protected $nombre;
    protected $id_region;
    protected $fillable =['nombre','id_region'];
    
    public function region() {
    	return $this->belongsTo('App\Modules\Region');
    }

    public function administradorGeneral() {
    	return $this->hasMany('App\Modules\AdministradorGeneral');
    }

    public function coordinadorDocente() {
    	return $this->hasMany('App\Modules\CoordinadorDocente');
    }

    public function alumno() {
    	return $this->hasMany('App\Modules\Alumno');
    }

    public function profesor() {
    	return $this->hasMany('App\Modules\Profesor');
    }
}
