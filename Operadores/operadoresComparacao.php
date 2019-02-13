<?php

    //Operadores de Comparação

    /* Os operadores de comparação são usados para fazemos comparações em nossas aplicações, portanto
      esses operadores são os mais usados na programação */

    //Operador Menor <
    //Esse operador retorna true se um número for menor que o outro e false se não for menor
    $a = 20;
    $b = 30;
    var_dump($a < $b); // a é menor que b, então essa condição retorna true

    echo "<br>";

    //Operador Maior >
    //Esse operador retorna true se um número for maior que o outro e false se não for maior
    var_dump($a > $b); // a não é maior que b, então essa condição retorna false

    echo "<br>";

    //Operador de Comparação de Valor ==
    //Esse operador retorna true se um número for igual ao outro e false se não for igual ao outro 
    var_dump($a == $b); // a não é igual a b, então essa condição retorna false

    echo "<br>";

    //Operador de Comparação de Valor e Tipo de dado ===
    /* Esse operador compara o valor e o tipo da variável, se o valor e o tipo de uma variável forem iguais 
       ao valor e o tipo de outra variável será retornado true, caso contrário retorna false */
    $c = 50.5;
    $d = 50;
    var_dump($c === $d);
    /* Como o valor e o tipo de dados da variável c são diferentes do valor e o tipo de dados da variável d,
       então será retornado false */

    echo "<br>";

    //Operador de Diferente de Valor !=
    /* Esse operador compara se o valor de uma variável é diferente de outra variável, se for diferente será 
       retornado true, se não for será retornado false */
    var_dump($a != $b);
    // Como o valor da variável a é diferente do valor da variável b, então será retornado true 

    echo "<br>";
    
    //Operador de Diferente de Valor e Tipo de dado !==
    /* Esse operador compara se o valor e o tipo da variável são diferentes ao valor e o tipo da outra variável,
       se o valor e o tipo de uma variável forem diferentes do valor e o tipo de outra variável será retornado 
       true, caso contrário retorna false */
    var_dump($c !== $d);
   /* Como o valor e o tipo de dado da variável a é diferente do valor e do tipo de dado da variável b, então 
   será retornado true */

   echo "<br>";

   //Operador de Menor ou Igual <=
   /* Esse operador compara se o valor de uma variável a é menor ou igual ao valor de uma variável b, se o valor 
      da variável a for menor ou igual ao valor da variável b será retornado true, caso contrário será retornado 
      false */
    var_dump($a <= $b);
    /* Como o valor da variável a é menor que o da variável b, então será retornado true */

    echo "<br>";

   //Operador de Maior ou Igual >=
   /* Esse operador compara se o valor de uma variável a é maior ou igual ao valor de uma variável b, se o valor 
      da variável a for maior ou igual ao valor da variável b será retornado true, caso contrário será retornado 
      false */
   var_dump($a >= $b);
   /* Como o valor da variável a não é maior que o da variável b, então será retornado false */

   echo "<br>";

   //Operador Spaceship <=> (novo no php 7)
   /* Esse operador se o valor da variável E for maior que o valor da variável F será retornado 1, se o valor
     da variável E for igual o valor da variável F será retornado 0 e se o valor da variável F for maior que 
     o valor da variável E será retornado -1. */
   $e = 50;
   $f = 35;
   var_dump($e <=> $f);

   echo "<br>";

   //Operador NULL Coalescing ?? (novo no php 7)
   /* Esse operador retorna sempre o primeiro valor a existir e ignora os nulos. Se em determinada variável não tiver 
      valor então será retornado o valor 1 */
   $g = NULL;
   $h = NULL;
   $i = 10;
   echo $g ?? $h ?? $i;

?>