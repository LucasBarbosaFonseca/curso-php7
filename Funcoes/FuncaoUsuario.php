<?php 

/* Funções de usuário 
Funções de usuário são funções que o usuário que cria, funções são boas para determinados códigos
que podem vir a serem executados várias vezes e para regras de negócio de sistemas. Toda função 
precisa retornar valor, caso não retorne nenhum valor não é uma função mais sim uma sub-rotina. */

function ola() {

    return "Hello World";

}

/* Primeiro se cria a função, depois para execura-la chamamos ela da seguinte maneira */
echo ola();

echo "<br>";

function salario() {

    return 946.00;

}

echo "José recebeu 3 salários minímos: ".(salario()*3);

?>