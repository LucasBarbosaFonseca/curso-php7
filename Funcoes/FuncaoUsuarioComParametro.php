<?php

/* Função com parâmetro (argumento)
São funções que possuem informações que uma função precisa para poder trabalhar corretamente */

//Variável que será usada como parâmetro para a função ola()
$texto = "mundo";

/* Na função o parâmetro é passado entre os parenteses depois do nome da função. A informação do 
parâmetro será usada pela função */ 
function ola($texto) {

    return "Olá $texto!";

}

//Quando for chamar a função é preciso passar parâmetro também 
echo ola($texto);

echo "<br>";

//Funçao com mais de 1 parâmetro
$valor1 = 20;
$valor2 = 10;

function soma($valor1, $valor2) {

    $total = $valor1 + $valor2;

    return "O valor total da soma é $total";

}

echo soma($valor1, $valor2);

?>