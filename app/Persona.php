<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $timestamp=false;
    protected $fillable =[
    	'dorsal','nombre', 'apellido', 'posicion'
    ];
}
