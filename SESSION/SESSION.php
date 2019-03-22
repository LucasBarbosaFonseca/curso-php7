<?php 

    /* Variáveis de sessão 
    As variáveis de sessão se assemelham as variáveis super globais, ou seja, elas são
    enchergadas em todo o código enquanto o usuário está online. A partir que o usuário acessa 
    um site uma session é criada entre o usuário e o servidor. O tempo de expiração da session
    é configurável e também podemos matar a session via programação quando quisermos. */

    //Função que indica que usaremos SESSION
    session_start();

    $_SESSION["nome"] = "Lucas";
    //Para testarmos a session vamos criar um arquivo chamado testeSession.php e chamar a session nome

    /* session_unset()
    Para matar sessão usamos a função session_unset(), vale lembrar que essa função com a variável 
    entre parentese mata somente a variável especificada, mas se a função não tiver nada entre parentese 
    a função irá matar todas as sessions */
    session_unset();

    /* session_destroy() 
    */

?>