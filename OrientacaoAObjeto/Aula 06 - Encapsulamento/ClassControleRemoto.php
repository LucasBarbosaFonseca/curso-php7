<?php

	//Interface Controlador sendo implementada na ClassControleRemoto

	require_once 'Controlador.php';

	class ControleRemoto implements Controlador {

		//Atributos
		private $ligado;
		private $tocando;
		private $volume;


		//Método Construtor 
		public function __construct() {
			$this->setLigado(false);
			$this->setTocando(false);
			$this->setVolume(50);
		}


		//Getters e Setters
		private function getLigado() {
			return $this->ligado;
		}

		private function setLigado($l) {
			$this->ligado = $l;
		}

		private function getTocando() {
			return $this->tocando;
		}

		private function setTocando($t) {
			$this->tocando = $t;
		}

		private function getVolume() {
			return $this->volume;
		}

		private function setVolume($v) {
			$this->volume = $v;
		}


		//Métodos sendo implementados
		public function ligar() {
			$this->setLigado(true);
		}

		public function desligar() {
			$this->setLigado(false);
		}

		public function abrirMenu() {
			echo "<br>Está ligado?: " . ($this->getLigado()?"Sim":"Não");
			echo "<br>Está tocando?: " . ($this->getTocando()?"Sim":"Não");
			echo "<br>Volume: " . $this->getVolume();
			for ($i = 0; $i <= $this->getVolume(); $i+=10) { 
				echo "|";
			}

			echo "<br>";
		}

		public function fecharMenu() {
			echo "<br>Fechando Menu...";
		}

		public function maisVolume() {
			if ($this->getLigado(true)) {
				$this->setVolume($this->getVolume() + 5);
			}
		}

		public function menosVolume() {
			if ($this->getLigado(true)) {
				$this->setVolume($this->getVolume() - 5);
			}
		}

		public function ligarMudo() {
			if ($this->getLigado(true) && $this->getVolume() > 0) {
				$this->setVolume(0);
			}
		}

		public function desligarMudo() {
			if ($this->getLigado(true) && $this->getVolume(0)) {
				$this->setVolume(50);
			}
		}

		public function play() {
			if ($this->getLigado(true) && !($this->getTocando(true))) {
				$this->setTocando(true);
			}
		}

		public function pause() {
			if ($this->getLigado(true) && $this->getTocando(true)) {
				$this->setTocando(false);
			}
		}

	}

?>