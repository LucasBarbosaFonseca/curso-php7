<?php

/* Array Constante (novo no php 7)
É uma constante em forma de array, definimos o nome e colocamos vários valores como em um array */

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'bd_teste'
]);

print_r(BANCO_DE_DADOS);

?>