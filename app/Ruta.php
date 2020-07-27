<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table= "ruta";
    protected $primaryKey = "idRuta";
    protected $fillable = ['idRuta', 'rutParaderos', 'idBus'];
    public $timestamps = false;
    public function Bus(){
        //muchos a uno
        return $this->belongsTo("App\Bus","idBus");
    }
}