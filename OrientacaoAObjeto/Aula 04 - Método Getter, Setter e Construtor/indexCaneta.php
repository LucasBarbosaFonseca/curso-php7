<?php

	require_once 'ClassCaneta.php';

	/* Instancia para usar com método construtor complexo
	Desse modo, instanciamos o objeto a partir da classe caneta e passamos o valor para o atributo 
	na própria instancia. */
	$c1 = new Caneta("100");

	//Instancia para setar valores sem o uso de nenhum método construtor 
	//$c1 = new Caneta;

	/* Podemos setar valores desse modo:
	   $c1->setModelo("Bic Cristal");
	
	Também podemos setar valores desse modo:
	$c1->modelo = "Bic"; */

	$c1->setModelo("Bic Cristal");
	$c1->setCor("Azul");
	$c1->setPonta(0.5);

	print_r($c1);

?>