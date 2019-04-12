<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EcuacionFabrica;
class ecuaciones extends Controller
{
    //
    public function index(Request $tipo/*$tipo,$a,$b,$c*/)
	{
		//echo  "tipo " . $tipo."<br> a:".$a." <br> b:".$b."<br> c:".$c;	
		$Resultado = EcuacionFabrica::crear_ecuacion($tipo['tipo'],$tipo['a'],$tipo['b'],$tipo['c']);
		//return "holaa".$tipo;,$b,$c);
		//return "holaa".$tipo;
		return response()->json($Resultado);

		
	}

}
