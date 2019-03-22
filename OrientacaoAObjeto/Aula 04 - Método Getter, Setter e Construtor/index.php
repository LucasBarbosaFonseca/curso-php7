<?php

	require_once 'ClassCaneta.php';

	//Instancia para usar com método construtor complexo
	$c1 = new Caneta("Bic Cristal", "Preta", 0.5);

	//Instancia para setar valores sem o uso de nenhum método construtor 
	//$c1 = new Caneta();
	//$c1->setModelo("Bic Cristal");
	//$c1->setPonta(0.5);

	print_r($c1);

?>