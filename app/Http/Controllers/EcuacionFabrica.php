<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface Ecuacion{
  public function calcular($tipo,$a,$b,$c);
  
}
  
class primer implements Ecuacion{
  public function calcular($tipo,$a,$b,$c)
  {
  	$resp = $c-$a+$b;
	return "<br> El resultado de x=".$resp;
  }
  
}

class segundo implements Ecuacion{
  public function calcular($tipo,$a,$b,$c)
  {
  	$resp1 = (-1*$b+sqrt(pow ( $b , 2 )-4* $a * $c))/(2*$a);
	$resp2 = (-1*$b-sqrt(pow ( $b , 2 )-4* $a * $c))/(2*$a);
	return "<br> El resultado de x1=".$resp1.", x2=".$resp2;
  }
  
}

class EcuacionFabrica extends Controller
{
    //
    public static function crear_ecuacion($tipo,$a,$b,$c)//: Ecuacion
    {
    	//return 'tipo:'.$tipo;
    	if ($tipo=='primer')
		{
			$obj = new primer();
			$x=$obj->calcular($tipo,$a,$b,$c);
			//echo $obj;
			//return $x;

			return response()->json($x);//response()->json(['error'=>'no autorizasdo'],status:401,[]);
					}
		if ($tipo=='segundo')
		{
			$obj = new segundo();
			$x=$obj->calcular($tipo,$a,$b,$c);
			//return $x;
			return response()->json($x
				);
			//return response()->json(['error'=>'no autorizasdo'],status:401,[]);
		}
			//echo $obj;
			//return response()->json($obj, status:200); //response()->json(['error'=>'no autorizasdo'],status:401,[]);
		

    		
    }
}
