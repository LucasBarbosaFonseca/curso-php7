<?php

/* O Switch Case ou Escolha Caso serve para tomarmos decisões a partir de opções que sabemos quais são em nossas 
aplicações. Funciona da seguinte...
Caso ocorra isso faz isso, caso ocorra aquilo faça aquilo, caso ocorra aquilo outro faça aquilo outro.
*/

//Pegar dia da semana do dia atual em que estamos
$diaDaSemana = date("w");

/*Switch Case (Escolha Caso)
Se o valor da variável $diaDaSemana for 0 vai executar uma decisão, se for 1 vai executar outra e assim por diante.
O break serve para terminar a execução caso chegue na decisão certa e impedir que continue executando os outros 
cases*/
switch ($diaDaSemana) {
    case '0':
        echo "Domingo";
        break;

    case '1':
        echo "Segunda-feira";
        break;

    case '2':
        echo "Terça-feira";
        break;

    case '3':
        echo "Quarta-feira";
        break;

    case '4':
        echo "Quinta-feira";
        break;

    case '5':
        echo "Sexta-feira";
        break;

    case '6':
        echo "Sábado";
        break;
    
    default:
        echo "Nenhuma das anteriores";
        break;
}

/* O default serve para executar uma decisão se nenhum dos cases forem executados */

?>