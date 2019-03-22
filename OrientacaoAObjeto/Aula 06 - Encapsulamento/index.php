<pre>

<?php

	require_once 'ClassControleRemoto.php';

	$c = new ControleRemoto();
	$c->ligar();
	$c->maisVolume();
	$c->menosVolume();
	$c->abrirMenu();

	print_r($c);

?>

</pre>