<?php 

    /* Adicionar itens no array bidirecional */

    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>'Lucas',
        'idade'=>23
    ));

    array_push($pessoas, array(
        'nome'=>'Laura',
        'idade'=>28
    ));

    print_r($pessoas);

?>