<?php 

    /*
    Tipos de dados no php
    
    No php existem 8 tipos de dados primitivos divididos em 3 grupos sendo o primeiro 
    deles de tipos básicos, o segundo de tipos compostos e o terceiro de tipos especiais.
    */

    //- Grupo de tipo BÁSICO

    //Tipo string = recebe valores do tipo texto, o valor vai dentro de aspas
    $nome = "Lucas";

    //Tipo numérico = recebe valores do tipo numérico, o valor não vai dentro de aspas
    $ano = 1995;

    //Tipo ponto flutuante = recebe números com casas decimais 
    $salario = 8000.90;

    //Tipo boleano = recebe valor true e false (verdadeiro ou falso)
    $carro_ligado = true;



    //Grupo de tipo COMPOSTO

    //Tipo array
    $frutas = array("abacaxi", "laranja", "manga");

    //Para trazer o valor de uma determinada posição no array, se faz da seguinte maneira:
    echo $frutas[1];
    //obs: as posições de arrays começam sempre em 0 zero

    //Tipo objeto
    $nascimento = new DateTime();

    //Ver conteúdo da variável 
    var_dump($nascimento);

?>
