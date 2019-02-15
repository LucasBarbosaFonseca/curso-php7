<?php

    /* Foreach
    O foreach (para cada) é utilizado para percorrer arrays e coleções. Funciona assim... 
    Eu tenho um array, para cada item que tiver dentro desse array repita uma determinada instrução */

    $meses = array(
        "Janeiro", "Fevereiro", "Março", "Abril",
        "Maio", "Junho", "Julho", "Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro"
    );

    /* Esse é o foreach simples 
    Esse mostra só os valores do array $meses. Cada item do array $meses será jogado na variável $mes e será mostrada*/
    foreach ($meses as $mes) {
        echo "O mês é: ".$mes."<br>";
    }

    echo "<br>";

    /* Esse é o foreach mais completo
    Esse mostra os valores do array $meses e o indice (posição) $index dos itens do array $meses.
    $meses é o array carregado com itens, $index são os indices de cada item do array $meses e $mes é
    somente os valores dos itens do array $meses */ 
    foreach ($meses as $index => $mes) {
        echo "Indice: ".$index."<br>";
        echo "O mês é: ".$mes."<br>";
    }

?> 