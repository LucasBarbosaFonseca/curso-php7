<?php

class Notebook {

    var $marca;
    var $modelo;
    var $memoriaRam;
    var $memoriaHD;
    var $processador;
    var $cargaBateria;
    var $ligado;
    var $usando;
    var $acessoInternet;

    function RecarregarBateria() {

    }

    function Ligar() {

        if ($this->cargaBateria == 0) {
            echo "<p>Não é possível ligar o notebook, pois a bateria está sem carga!</p>";
        }
        else {
            $this->ligado = true;
            $this->usando = true;
        }

    }

    function Desligar() {
        $this->ligado = false;
        $this->usando = false;
    }

}

?>