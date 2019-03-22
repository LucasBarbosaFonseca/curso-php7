<?php 

/* Id de sessão 
Um id de sessão é uma identificação de sua sessão única no servidor, por exemplo, quando abrimos 
o navegador e ativamos a sessão com session_start() ganhamos um id do servidor para ele identificar 
quem somos, se abrirmos o site em outro navegador ou no modo anônimo ganharemos um novo id, pois 
ele entende que é outra pessoa que entrou. */

/* Para recuperarmos uma sessão 
Usamos essa função antes do session_start();, para usar a função afim de recuperarmos uma sessão 
com session_id() é só passar o id da sessão na função */
//session_id('4f01i5ao8kk0cu1r2i0oci98lu1');

session_start();

//Função para mostrar o id de nossa sessão 
echo session_id();

//Podemos também forçar que o servidor crie uma nova sessão usando a seguinte função 
echo session_regenerate_id();

?>