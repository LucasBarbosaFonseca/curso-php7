<?php 

    /* Array Bidirecional 
    Array Bidimensional (matriz) é uma espécie de variável composta que é capaz de guardar mais de
    um valor, array budimensional (matriz) é um array de duas dimensões, um array em linha e coluna
    que forma uma espécie de matriz, 
    Exemplo teórico de uma matriz:

                Colunas
                0        1       2
    Linhas  0   Camaro | Dodge | Mustang
                _______|_______|________
            1   Maverik|Audi A3| Opala 
                _______|_______|________
            2   Impala | Civic | Audi A4
    
    */

    //Maneira antiga e mais simples 
    $carros[0][0] = "GM";
    $carros[0][1] = "Opala";
    $carros[0][2] = "Camaro";
    $carros[0][3] = "Impala";

    $carros[1][0] = "Ford";
    $carros[1][1] = "Maveric";
    $carros[1][2] = "Mustang GT";
    $carros[1][3] = "Fusion";

    $carros[2][0] = "Volkswagem";
    $carros[2][1] = "Golf GTI";
    $carros[2][2] = "Jeta";
    $carros[2][3] = "Passati";

    echo $carros[0][1];

    /* Função end serve para retornar o último valor do array */
    echo end($carros[0]);

    echo "<br>";

?>