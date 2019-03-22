<?php

	class Carro {

		var $marca;
		var $modelo;
		var $cor;
		var $ano;
		var $placa;
		var $ligado;
		var $andando;

		function ligar() {
			$this->ligado = true;
		}

		function desligar() {
			$this->ligado = false;
		}

		function andar() {

			if ($this->ligado == true && $this->andando == true) {
				
				echo "<p>Carro andando...</p>";

			} elseif ($this->ligado == false || $this->andando == false) {
				
				echo "<p>Carro parado...</p>";

			}
		}

		function frear() {
			$this->andando = false;
		}

	}

?>