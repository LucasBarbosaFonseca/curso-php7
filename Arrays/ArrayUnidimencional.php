<?php

    /* Array Unidimensional
    Array Unidimensional (vetor) é uma espécie de variável composta que é capaz de guardar mais de
    um valor, array unidimensional (vetor) é um array de uma dimensão, um array em linha ou coluna, 
    Todo array começa em posição zero. */

    /* Array Unidimensional (vetor) podem ser criados de duas maneiras, maneira 1 */
    $frutas = array("Banana", "Mamão", "Abacate", "Uva", "Abacaxi", "Laranja");
    print_r($frutas);

    echo "<br>";
    
    //Maneira 2
    $frutas = array(0 => 'Uva',
                    1 => 'Banana');

    print_r($frutas);

?>