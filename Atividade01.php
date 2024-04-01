<?php 
// Vinícius Kauã e Caio Queiroz /


	$Valor1 = 15;
	$Valor2 = 23;

		function calcular($Valor1, $Valor2){
			return ($Valor1 + $Valor2);
		}


		$resultado = calcular($Valor1, $Valor2);

		printf ("O resultado de $Valor1 + $Valor2 é: $resultado <br>");


		if ($resultado > 20) {
			echo ('O resultado final é: ' . $resultado  + 8);

		} elseif ($resultado <= 20) {
			echo (' O resultado final é:' . $resultado - 5 ) ;
		}




 ?>