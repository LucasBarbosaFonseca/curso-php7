<?php 

/* Passagem de parâmetro por referência 
Função com passagem de parâmetro funciona da seguinte forma...
Se tivermos uma variável fora da função com um valor e um parâmetro na função com outro valor,
o parâmetro que está dentro da função irá passar seu valor para a variável fora da função, sendo 
assim uma referência. Para passarmos o parâmetro por referência, basta colocar um & (e comercial)
antes do parâmetro da seguinte forma: &$a */

$a = 10;

function trocaValor(&$a) {

    $a = 50;

    return $a;

}

echo trocaValor($a);
echo $a;

?>