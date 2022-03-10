<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\codigopostal_model;
class codigoPostalController extends Controller
{
    //
    public function index2()
    {
        $contenido=codigopostal_model::all();
        return response()->json(["estatus"=>"ok","unidades"=>$contenido]);
    }
    
}
