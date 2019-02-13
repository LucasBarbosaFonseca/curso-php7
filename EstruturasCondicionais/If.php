<?php

/* If serve para tomarmos decisões a partir de opções que não sabemos quais são em nossas aplicações.
O if serve para criarmos regras em nossas aplicações */

$qualSuaIdade = 68;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

//Se a condição for verdadeira será executado o que estiver entre as chaves
if ($qualSuaIdade <= $idadeCrianca) {
    echo "Criança";
} else {
    echo "Não é criança";
}
/* O else serve para quando a primeira condição não for verdadeira ser executada uma outra.
O else é usado uma só vez e no final */


/* Agora usaremos o else if que serve para quando tiver mais de uma condição */
if ($qualSuaIdade <= $idadeCrianca) {
    echo "Criança";
} else if ($qualSuaIdade > $idadeCrianca && $qualSuaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($qualSuaIdade >= $idadeMaior && $qualSuaIdade < $idadeIdoso) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";


/* If Com Operador Ternário 
Esse if serve para verificações simples. O que fica entre parenteses é a condição if, o ? significa então e o 
: significa senão*/
echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de idade";

?>