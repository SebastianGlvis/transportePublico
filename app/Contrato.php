<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table= "contrato";
    protected $primaryKey = "idContrato";
    protected $fillable = ['idContrato', 'conFechaInicio', 'conFechaFin','conValor','idPersonal'];
    public $timestamps = false;
    public function Personal(){
        //muchos a uno
        return $this->belongsTo("App\Personal","idPersonal");
    }
}
