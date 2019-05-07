<?php

require_once 'ClasseNotebook.php';

$note1 = new Notebook();

$note1->marca = "Samsung";
$note1->modelo = "NP270E5G-XD1BR";
$note1->memoriaRam = "8 GB";
$note1->memoriaHD = "1 TB";
$note1->processador = "Intel Inside Core i5";
$note1->cargaBateria = 100;
$note1->ligado = false;
$note1->usando = false;
$note1->acessoInternet = true;

$note1->Ligar();

print_r($note1);

?>