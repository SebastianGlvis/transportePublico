<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table= "personal";
    protected $primaryKey = "idPersonal";
    protected $fillable = ['perNombre', 'perApellido', 'perIdentificacion','perNacimiento','user','password','idRol'];
    public $timestamps = false;
    
}
