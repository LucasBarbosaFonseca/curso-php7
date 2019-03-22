<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 3 - Visibilidade de Atributos e Métodos</title>
</head>
<body>
	<?php

		require_once 'ClasseCaneta.php';

		$c1 = new Caneta;

		$c1->modelo = "Bic Cristal";
		$c1->cor = "Azul";
		//$c1->ponta = 0.5;
		//$c1->carga = 80;
		//$c1->tampada = false;

		$c1->destampar();
		
		print_r($c1);

	?>

</body>
</html>