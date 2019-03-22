<?php

/* Uma novidade em funções no php 7 é poder informar o tipo de dados dos parâmetros que seram 
passados e suas extensões. Os 3 pontos depois do int significa que será usado um array com mais de 
um valor. No return a função array_sum() irá somar todos os valores do array. Quando chamar a função 
passamos os valores dos parâmetro. A função só funciona se todos os valores forem do mesmo tipo.
O nome desse recurso é Declaração de Recursos Escalares. */

function soma(int ...$valores) {

    return array_sum($valores);

}

echo soma(4, 2);

echo "<br>";

/* Uma outra novidade em funções no php 7 é fazer a declaração do tipo de retorno, ou seja, dizer o tipo 
de retorno que a função irá ter. Os 2 pontos significa que vai retornar um tipo e depois dos : é o tipo 
que queremos que o valor de retornado seja */

function OutraSoma(int ...$valores):string {

    return array_sum($valores);

}

echo var_dump(OutraSoma(8, 2));

?>