<?php

    require_once 'ClassPessoa.php';
    require_once 'ClassLivro.php';

    $p = array();

    $p[0] = new Pessoa("Lucas Barbosa Fonseca", 23, "M");
    
    print_r($p[0]);


    echo "<br>";


    $l = array();

    $l[0] = new Livro("As Sete Leis Espirituais do Sucesso", "Deepak Chopra", 118, $p[0]);

    
    $l[0]->abrir();
    $l[0]->folhear(80);
    $l[0]->avancarPag();
    $l[0]->voltarPag();
    $l[0]->detalhes();

    print_r($l[0]);

?>