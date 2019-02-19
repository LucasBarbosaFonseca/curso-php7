<?php 

    /* While (enquanto)
    O while (enquanto) serve para executarmos algo enquanto uma condição for verdadeira, é muito usado 
    para pegar dados do banco de dados mais ou menos assim: Não sabemos ao certo quantos registros
    existe no banco de dados então com o comando while fazemos... enquanto houver dados no banco de dados 
    que não sabemos ao certo quantos são, mostre todos eles.
    O for tem um valor inicial, um valor final e um incremento, o foreach serve para arrays e coleções e já o while 
    podemos usar para qualquer assunto desde que a condição seja verdadeira */

    $condicao = true;

    /* Enquanto a condição for verdadeira sorteie com a função rend de 1 a 10, se o número 3 for sorteado
    exiba a palavra TRÊS na tela e termine o loop atribuindo false a condição. */ 
    while ($condicao) {
        $numero = rand(1, 10);

        if ($numero === 3) {
            echo "TRÊS!!!";
            $condicao = false;
        }

        echo $condicao . " ";

    }

    /* QUANDO FOR USAR O WHILE COM NÚMEROS É PRECISO USAR UM CONTADOR PARA QUE NÃO CAIA EM LOOP INFINITO */

?>