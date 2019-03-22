<?php

/* Funções Anônimas
Nas funções anônimas criamos uma variável e essa variável recebe a função. Uma função anônima não tem 
nome, e basta apenas sua execução dentro de uma variável ou na execução de um comando e a função anônima
também não ter return */

//Ex:
function test($callback) {

    //Processo lento
    $callback();

}

test(function(){

    echo "Terminou!";

});

//Outro exemplo:
$fn = function($a){

    var_dump($a);

};

$fn("Oi");

?>