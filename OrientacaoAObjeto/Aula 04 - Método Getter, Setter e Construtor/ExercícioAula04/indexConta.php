<?php

require_once 'ClasseContaBancaria.php';

$cb = new ContaBancaria;

$cb->setNumConta(1);
$cb->setDono("Lucas");
$cb->setTipo("cc");
$cb->setBanco("Santander");

$cb->AbrirConta("cc");
$cb->Depositar(2000);
$cb->Sacar(2150);
$cb->FecharConta();

print_r($cb);

?>