<?php 

	class Television {

		private $marca;
		private $modelo;
		private $polegada;
		private $canal;
		private $volume;
		private $ligada;

		public function __construct($mar, $mod, $pol, $canal) {
			$this->setMarca($mar);
			$this->setModelo($mod);
			$this->setPolegada($pol);
			$this->setCanal($canal);
			$this->Ligar();
		}

		public function Ligar() {
			if ($this->ligada == false) {
				$this->ligada = true;
				$this->volume = "Aumentou o volume";
				echo "<p>TV Ligada...</p>";
			}
		}

		public function Desligar() {
			if ($this->ligada == true) {
				$this->ligada = false;
				$this->volume = "";
				$this->canal = "";
				echo "<p>TV Desligada...</p>";
			}
		}

		public function AumentarVolume() {
			$this->volume = "Aumentou o volume";
		}

		public function DiminuirVolume() {
			$this->volume = "Diminuiu o volume";
		}

		public function getMarca() {
			return $this->marca;
		}

		public function setMarca($mar) {
			$this->marca = $mar;
		}

		public function getModelo() {
			return $this->modelo;
		}

		public function setModelo($mod) {
			$this->modelo = $mod;
		}

		public function getPolegada() {
			return $this->polegada;
		}

		public function setPolegada($pol) {
			$this->polegada = $pol;
		}

		public function getCanal() {
			return $this->canal;
		}

		public function setCanal($canal) {
			$this->canal = $canal;
		}

	}

?>