<pre>

<?php 

	require_once 'ClassContaBanco.php';

	$cb1 = new ContaBancaria;

	$cb1->setNumConta(1);
	$cb1->setTipo("cc");
	$cb1->setDono("Jubileu");

	$cb1->abrirConta("cc");
	$cb1->depositar(500);
	$cb1->sacar(550);
	$cb1->fecharConta();
	

	print_r($cb1);

?>

</pre>