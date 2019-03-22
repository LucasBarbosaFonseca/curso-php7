<?php
/* Classe DateTime
Podemos mexer com datas e horários utilizando a classe DateTime, que torna datas e horários com tipo 
datetime diferente da função date que as datas e horários ficam como string. Esse é o melhor jeito para 
mexermos com datas e horários e é orientado a objetos. */

//Instanciando um objeto a partir da classe datetime 
$dt = new DateTime();

//Mostrando data atual formatando para o formato brasileiro com o método format que é igual o método date
echo $dt->format("d/m/Y H:i:s");


//Instanciando um objeto a partir da classe dateinterval com um período de 15 dias
$periodo = new DateInterval("P15D");

//Adicionando o período de 15 dias ao objeto da classe datetime com o método add
$dt->add($periodo);

echo "<br>";

//Mostrando a data atual com 15 dias adicionados
echo $dt->format("d/m/Y H:i:s");

?>