<pre>

<?php 

	require_once 'ClassContaBanco.php';

	$cb = new ContaBancaria();

	$cb->setNumConta(0001);
	$cb->setTipo("cp");
	$cb->setDono("Jubileu");
	$cb->abrirConta("cp");
	$cb->depositar(8000);
	$cb->sacar(3780);



	$cb2 = new ContaBancaria();

	$cb2->setNumConta(2);
	$cb2->setTipo("cc");
	$cb2->setDono("Creuza");
	$cb2->abrirConta("cc");
	$cb2->depositar(3000);
	$cb2->sacar(1405);



	print_r($cb);
	print_r($cb2);

?>

</pre>