<?php

    /*For
    O For é um laço de repetição com inicio, fim, incremento e decremento.
    O primeiro $i é onde o laço começa, o segundo $i é onde o laço termina e o último $i
    é o incremento que a cada execução vai incrementando (somando) mais 1 ou quanto quisermos que incremente.
    O que estiver dentro das chaves será executado o tanto de vezes que foi definida no laço. */

    for ($i = 0; $i < 10; $i++) {
        echo $i . "<br>";
    }

    echo "<br>";

    /* Esse for irá até 1000 incrementando de 5 em 5.
    Para incrementarmos de 1 em 1 nós usamos $i++, mas se quisermos incrementar com mais de 1
    nós usamos $i+=5 por exemplo */
    for ($i = 0; $i <= 1000; $i+=5) {
        echo $i . "<br>";
    }

    echo "<br>";

    /* O continue vai fazer com que o for continue a ser executado depois serem ocultados
    os números do intervalo do if */
    for ($i = 0; $i <= 1000; $i+=5) {

        if ($i > 200 && $i <= 800) continue;

        echo $i . "<br>";
    }

    echo "<br>";

    /* O break vai fazer com que o for pare de ser executado quando chegar a 500 ou qualquer número definido */
    for ($i = 0; $i <= 1000; $i+=5) {

        if ($i === 500) break;

        echo $i . "<br>";
    }

?>