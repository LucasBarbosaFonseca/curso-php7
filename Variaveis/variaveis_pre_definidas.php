<?php

    /*
    Variáveis pré definidas

    Variáveis pré definidas também conhecidas por arrays super globais que são variáveis 
    internas do php que já vem com alguns recursos. Algumas dessas váriaveis vão desde informação 
    externa até informações do ambiente. Informações externas são coisas que o usuário informa em um
    formulário por exemplo que podem ser recuperadas com $_POST e $_GET, já 
    informações do ambiente são informações que podem ser acessadas em qualquer parte do php.

    Algumas das várias variáveis pré definidas são $_GET e $_POST.

    $_GET - Ela recebe vaviáveis através da url no navegador, ou seja, pelo método GET
   
    $nome = (int)$_GET["a"];

    var_dump($nome);
    */

    /*Para passarmos uma um valor para a variável GET através da url precisamos primeiro passar o link da página 
    localhost/curso-php7/Variaveis/variaveis_pre_definidas.php*, depois separar o link da variável simplesmente colocando 
    um ponto de interrogação ?, ficará assim http://localhost/curso-php7/Variaveis/variaveis_pre_definidas.php?a=123*/

    /*Toda informação que vier de uma variável POST ou GET será em formato string, se quisermos utilizar essa 
    informação como um número se for número precisamos converter de string para int da seguinte forma:
    
    $nome = (int)$_GET['a'];    */

    /*Podemos também passar duas ou mais variáveis GET através da url separando as variáveis com o e comercial &
    da seguinte forma:     
    http://localhost/curso-php7/Variaveis/variaveis_pre_definidas.php?nome=Lucas&idade=23
        
    $nome = $_GET['nome'];
    $idade = (int)$_GET['idade'];
    
    var_dump($nome);
    var_dump($idade);
    */

    /*Temos também a variável global $_SERVER que faz com que possamos pegar informações do ambiente em 
    que a aplicação está hospedada. Entendemos por ambiente é o usuário cliente e o servidor em que a aplicação 
    está hospedada. Podemos pegar o ip do usuário da seguinte forma:
        
    $ip = $_SERVER['REMOTE_ADDR'];
    
    echo $ip;
    */

    /*Da seguinte forma podemos pegar o nome do arquivo que está sendo executado no ambiente:

    $arquivo = $_SERVER['SCRIPT_NAME'];
    
    echo $arquivo;
    */
?>