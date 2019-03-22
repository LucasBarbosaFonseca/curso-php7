<?php

    /* Constante 
    Para entendermos o que é uma constante basta lembrar-mos o que é uma variável, uma 
    variável é um espaço na memória que usamos para armazenar valores temporariamente. A
    diferença de variável e constante é que variável o valor pode variar, durante o código
    você pode mudar seu valor e uma constante depois de criar e colocar um valor nela não 
    podemos mais mudar, é usada quando não precisa mudar seu valor. Para criaremos uma constante 
    usamos uma função chamada define para definir o valor da constante e depois chamamos a
    constante, também quando criamos uma constante podemos definir se ela é case sensitive ou
    case insensitive. 
    Para criarmos uma constante usamos a função define com o primeiro parametro que é o nome 
    da constante e o segundo parametro que é o valor da constante. A recomendação é que 
    sempre use o nome da constante com letras maiúsculas. Chamamos a constante sem o $ no
    começou. Para usarmos a constante em case insensitive para podermos usar a constante tanto
    com letra maiúscula tanto com letras minúsculas, do lado do segundo parametro é só  colocar vírgula
    e colocar true. */

    define("SERVIDOR", "127.0.0.1");
    echo SERVIDOR;

?>