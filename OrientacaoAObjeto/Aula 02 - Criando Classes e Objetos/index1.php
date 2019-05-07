<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 2 - Criando classes e objetos</title>
</head>
<body>
	<?php

		//Temos que importar a classe para o arquivo onde será instanciada a classe
		require_once 'ClasseCaneta.php';

		/* Instância:
		O que está abaixo é uma instância de uma classe. Um instanciamento é quando criamos um objeto a partir 
		de uma classe */
		$c1 = new Caneta();

		$c1->modelo = "Bic";
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->carga = 50;
		$c1->tampada = false;

		$c1->tampar();

		$c1->rabiscar();
		
		var_dump($c1);

	?>

	<br><br><br>

	<?php
	
		require_once 'ClasseCarro.php';

		$carro = new Carro;

		$carro->marca = "Hyunday";
		$carro->modelo = "Sonata";
		$carro->cor = "Branco";
		$carro->ano = 2018;
		$carro->placa = "rxc-8987";
		$carro->ligado = false;
		$carro->andando = true;

		$carro->andar();

		print_r($carro);
	
	?>

	<br><br><br>

	<?php

		
		require_once 'ClasseTelevision.php';

		$tv = new Television;

		$tv->marca = "Samsung";
		$tv->modelo = "Led";
		$tv->polegada = 50;
		$tv->canal = "Globo";
		$tv->volume = "Aumentou o volume";
		$tv->ligada = true;

		$tv->Ligar();

		print_r($tv);

	?>

</body>
</html>