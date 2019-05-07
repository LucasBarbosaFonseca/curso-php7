<pre>

<?php

    require_once 'ClassControleRemoto.php';

    $cr = new ControleRemoto();

    $cr->ligar();

    $cr->play();

    $cr->maisVolume();

    $cr->abrirMenu();

    print_r($cr);

?>

</pre>