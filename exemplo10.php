<?php 

	$nome = "Vinicius";
	$peso = 89.50;
	$altura = 1.87;


	function calcular($peso,$altura) {
		return ($peso/($altura*$altura));
	
	}

	$resp = calcular($peso, $altura);

	if ($resp <= 18.5) {
		echo ("Seu peso é $peso, logo você está abaixo do peso <br>");
	} elseif ($resp >= 18.6 && $resp <= 24.9) {
		echo ("Seu peso é $peso, logo você está no seu peso ideal (PARABÉNNNNSSS!!)");
	} elseif ($resp >= 25.0 && $resp <= 29.9){
		echo ("Seu peso é $peso, logo você está levemente acima do peso");
	}
	  elseif ($resp >= 30.0 && $resp <= 34.9) {
		echo ("Seu peso é $peso, logo você está com Obesidade grau I");
	} elseif ($resp >= 35.0 && $resp <= 39.9) {
		echo ("Seu peso é $peso, logo você está com Obesidade grau II (SEVERA)");
	} elseif ($resp >= 40) {
		echo ("Seu peso é $peso, logo você está com Obesidade III (Mórbida)");
	}



	printf ("Seja Bem Vindo, Senhor $nome seu peso é $peso metros e sua altura é $altura logo seu IMC é: %2f", $resp);




 ?>