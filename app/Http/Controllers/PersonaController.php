<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    public function mostrarPersona(){
    	$datos=Persona::all();
    	
    	return response()->json(['persona'=>$datos]);
    }
}
