<?php

//Função que define as configurações locais da nossa região
/* O LC_ALL diz toda a configuração de região vai ser em português. Depois de LC_ALL devemos colocar
o padrão de linguagem do linux que é pt_BR, o padrão de linguagem com utf-8 para acentuações 
que é o pt_BR.utf-8 e o padrão de linguagem do windows que é portuguese. Desse jeito funciona 
corretamente no linux e no windows. */ 
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

/* Formata uma hora/data local de acordo com a configuração do idioma. Nome do mês e dia da 
semana e outras strings respeitam o idioma corrente definido com a função setlocale().
A função strftime está trazendo o dia da semana da data atual. */
echo strftime("%A");

?>