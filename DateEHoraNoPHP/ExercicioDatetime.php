<?php 

$dt = new DateTime();

$periodo = new DateInterval("P1W");

$dt->sub($periodo);

echo $dt->format("d/m/Y");

?>
