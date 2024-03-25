<?php 

	$nome = "Vinicius";
	$peso = 89.50;
	$altura = 1.87;


	function calcular($peso,$altura) {
		return ($peso/($altura*$altura));
	
	}

	$resultado = calcular($peso, $altura);


	printf ("Seja Bem Vindo, Senhor $nome seu peso é $peso metros e sua altura é $altura logo seu IMC é: %2f", $resultado);

 ?>