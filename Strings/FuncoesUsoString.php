<?php

    //Algumas funções úteis em php para usar com strings especificamente

    //Função Strtoupper
    //Essa função deixa a palavra com todas as letras maiúsculas
    $nome = "lucas barbosa fonseca";
    echo strtoupper($nome);

    //Função Strtolower
    //Essa função deixa a palavra com todas as letras minúsculas
    $nome2 = "LAURA FERNANDA SOUZA";
    echo strtolower($nome2);

    //Função Ucwords
    //Essa função deixa a primeira letra da palavra em maiúscula
    $nome3 = "paulo fernando da silva";
    echo ucwords($nome3);

    //Função Ucfirst
    //Essa função deixa apenas a primeira letra da primeira palavra em maiúscula
    $nome4 = "joão paulo";
    echo ucfirst($nome4);

    //Função str_replace
    //Essa função substitui o primeiro parâmetro pelo segundo, de uma frase por exemplo 
    $frase = "A Laura é minha namorada";
    $novaFrase = str_replace("namorada", "esposa", $frase);
    echo $novaFrase;

    //Função strpos
    //Essa função trás a posição de uma determinada palavra em uma frase por exemplo 
    $outraFrase = "A repetição é mãe da retenção.";
    $resultado = strpos($outraFrase, "mãe");
    echo $resultado;

    

?>