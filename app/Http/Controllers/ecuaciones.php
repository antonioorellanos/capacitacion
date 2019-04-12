<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EcuacionFabrica;
class ecuaciones extends Controller
{
    //
    public function index($tipo,$a,$b,$c)
	{
		//echo  "tipo " . $tipo."<br> a:".$a." <br> b:".$b."<br> c:".$c;	
		$Resultado = EcuacionFabrica::crear_ecuacion($tipo,$a,$b,$c);
		return response()->json($Resultado);

		
	}

}
