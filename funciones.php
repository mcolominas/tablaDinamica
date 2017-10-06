<?php
	  //Convierte un string en numeros para calcular mejor la posicion (A = 1, B = 2, ...)
	  //Nota: solo admite caracteres ingleses.
	  function getCodeOfString($string){
		  $num = 0;
		  foreach(str_split($string) as $char){
			if($num > 0)
				$num *= 26;
			
			$num += ((int) ord($char)) - 64;
		  }
		return $num;
	  }
	  
	  //Convierte el codigo devuelta a string
	  function getStringOfCode($num){
		  $string = "";
		  while($num > 0){
			  $mod = ($num % 26);
			  if($mod == 0)
				  $mod = 26;
			  $char = chr($mod + 64);
			  $string = $char.$string;
			  $num-= $mod;
			  $num/=26;
		  }
		  return $string;
	  }
?>