<?php

/* Passagem de parâmetro por valor 
Função com passagem de parâmetro por valor funciona da seguinte forma... 
No servidor web terá um espaço na memória que é reservado e nesse espaço na memória é onde 
foi definida a variável $a e o parâmetro $a da função também tem um espaço reservado mas em outro lugar 
na memória, por esse motivo que a variável $a fora da função é uma coisa e o parâmetro $a dentro da 
função é outra coisa */

$a = 10;

function trocaValor($a) {

    $a = 50;

    return $a;

}

echo trocaValor($a);
echo $a;

?>