<?php

    /* JSON
    JSON significa Javascript Object Notation é uma notação criada basicamente para o javascript mas
    que tomou todo o universo da programação, todas as linguagens de programação geralmente podem usar arquivos no
    formato JSON. JSON é um formato de arquivo de comunicação que fascilita a integração de sistemas
    (interobilidade de sistemas), por exemplo, uma pessoa tem um sistema em php e outra pessoa tem 
    um sistema em java, a que tem o sistema em php gera um JSON com os dados de seu sistema e a pessoa
    com o sistema em java pode consumir o JSON gerado pelo sistema em php.
    Temos a função json_encode() que pega os dados do array e transforma em JSON e temos também a função 
    json_decode() que pega um arquivo JSON e transforma em array. */

    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>'Lucas',
        'idade'=>23
    ));

    array_push($pessoas, array(
        'nome'=>'Laura',
        'idade'=>28
    ));

    echo json_encode($pessoas);

    /* Pode ocorrer de termos problemas com acentuação quando gerar o JSON, e nesse caso basta converter a string 
    ou as informações com acento para um padrão de utf-8. Esse problema só vai ocorrer se o formato de arquivo 
    que estamos convertendo vem fora do padrão utf-8. */

?>