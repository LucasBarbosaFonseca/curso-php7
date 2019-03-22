<?php 

/* Função Date serve para mexermos com datas */
echo date("d/m/Y H:i:s");

echo "<br>";

echo time();

echo "<br>";


//Converte string da data para timestasmp
// Podemos gerar o timestasmp a partir de uma data
$timestamp = strtotime("2001-09-11");

/* E a partir do timestamp formatar a data do jeito que quisermos
para saber o dia da semana, ano, e etc */
echo date("l, d/m/Y", $timestamp);

echo "<br>";


//Formas de usar strtotime()
//Timestamp de agora 
$data = strtotime("now");
echo date("l, d/m/Y", $data);

echo "<br>";

//Timestamp da próxima quarta-feira 
$data2 = strtotime("next wednesday");
echo date("l, d/m/Y", $data2);

echo "<br>";

//Timestamp da quarta-feira passada
$date3 = strtotime("last wednesday");
echo date("l, d/m/Y", $date3);

echo "<br>";

//Timestamp daqui a uma semana (daqui 7 dias)
$date4 = strtotime("+1 week");
echo date("l, d/m/Y", $date4);

echo "<br>";

//Timestamp daqui a 3 dias
$date5 = strtotime("+3 day");
echo date("l, d/m/Y", $date5);

?>