<?php

	class Television {

		var $marca;
		var $modelo;
		var $polegada;
		var $canal;
		var $volume;
		var $ligada;

		function Ligar() {
			if ($this->ligada == false) {
				$this->ligada = true;
				$this->volume = "Aumentou o volume";
				echo "<p>TV ligada</p>";
			}
		}

		function Desligar() {
			if ($this->ligada == true) {
				$this->ligada = false;
				$this->canal = "";
				$this->volume = "";
				echo "<p>TV desligada</p>";
			}
		}

		function AumentarVolume() {
			$this->volume = "Aumentou o volume";
		}

		function DiminuirVolume() {
			$this->volume = "Diminuiu o volume";
		}

	}

?>