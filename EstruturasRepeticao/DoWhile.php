<?php

    /* Do While (faça enquanto)
    As diferenças básicas entre While (enquanto) e Do While (faça enquanto) são que no While ele testa 
    primeiro a condição depois executa o que estiver no bloco e no Do While ele primeiro executa o que 
    estiver dentro do bloco após o DO e testa a condição por último e o Do While faz execução pelo menos 
    uma vez mesmo a condição sendo falsa. O Do While funciona do seguinte modo...
    Faça (do) o que estiver dentro do bloco após o Do enquanto (while) a condição for verdadeira ou falsa
    executando ao menos uma vez. */

    $total = 100;
    $desconto = 0.9;

    do {

        $total = $total * $desconto;
        /* Podemos fazer dessa maneira também:
        $total *= $desconto */

    } while ($total > 100);

    echo $total;

    /* QUANDO FOR USAR O DO WHILE COM NÚMEROS É PRECISO USAR UM CONTADOR PARA QUE NÃO CAIA EM LOOP INFINITO */

?>