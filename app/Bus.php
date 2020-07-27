<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table= "bus";
    protected $primaryKey = "idBus";
    protected $fillable = ['idBus', 'busMarca', 'busModelo','busCapacidad','idPersonal'];
    public $timestamps = false;

    public function Personal(){
        //muchos a uno
        return $this->belongsTo("App\Personal","idPersonal");
    }
}
