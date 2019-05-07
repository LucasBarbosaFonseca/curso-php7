<?php

    require_once 'ClassLutador.php';

    $l = array();

    $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
    $l[0]->ganharLuta();
    $l[0]->perderLuta();
    $l[0]->empatarLuta();
    $l[0]->apresentar();
    $l[0]->status();

    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[1]->ganharLuta();
    $l[1]->perderLuta();
    $l[1]->empatarLuta();
    $l[1]->apresentar();
    $l[1]->status();

    $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $l[2]->ganharLuta();
    $l[2]->perderLuta();
    $l[2]->empatarLuta();
    $l[2]->apresentar();
    $l[2]->status();

    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $l[3]->ganharLuta();
    $l[3]->perderLuta();
    $l[3]->empatarLuta();
    $l[3]->apresentar();
    $l[3]->status();

    $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[4]->ganharLuta();
    $l[4]->perderLuta();
    $l[4]->empatarLuta();
    $l[4]->apresentar();
    $l[4]->status();

    $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
    $l[5]->ganharLuta();
    $l[5]->perderLuta();
    $l[5]->empatarLuta();
    $l[5]->apresentar();
    $l[5]->status();
?>