<?php

    //Operadores Lógicos

    //Operador E (podemos usar tanto && tanto and que tem menor prioridade)
    //Retorna verdadeiro (True) se as duas operações forem verdadeiras
    $result = 10 > 5 && 2 < 5;
    var_dump($result);



    //Operador OU (podemos usar tanto || tanto or que tem menor prioridade)
    //Retorna verdadeiro (True) se uma das duas operações forem verdadeiras
    $result2 = 5 < 3 || 12 > 8;
    var_dump($result2);



    //Operador NÃO (usamos !)
    //Retorna verdadeiro (True) se a operação não for verdadeira 
    $result3 = !5 < 3;
    var_dump($result3);



    //Operador XOR (podemos usar xor, esse da exclusividade)
    //Retorna verdadeiro (True) se uma das operações forem verdadeira, mas não ambos
    $result4 = 4 > 8 xor 3 > 2;
    var_dump($result4);


?>