<?php

	/* Interface Controlador sendo implementada na ClassControleRemoto:
	implements Controlador */

	//Para encapsular, todos os atributos da classe precisam ser privados 

	//Chamando a interface, o arquivo Controlador.php
	require_once 'Controlador.php';

	class ControleRemoto implements Controlador {

		//Atributos
		private $volume;
		private $ligado;
		private $tocando;

		//Método Construtor 
		public function __construct() {
			$this->setVolume(50);
			$this->setLigado(false);
			$this->setTocando(false);
		}

		//Métodos de comportamento com os mesmo nomes dos métodos abstratos iguais aos da interface 
		public function ligar() {
			$this->setLigado(true);
		}

		public function desligar() {
			$this->setLigado(false);
		}

		public function abrirMenu() {
			echo "<br>Está ligado? " . ($this->getLigado()?"Sim":"Não");
			echo "<br>Está tocando? " . ($this->getTocando()?"Sim":"Não");
			echo "<br>Volume: " . $this->getVolume();

			for ($i = 0; $i <= $this->getVolume(); $i+=10) { 
				echo "|";
			}

			echo "<br>";

		}

		public function fecharMenu() {
			echo "<br>Fechando menu...";
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

			if ($this->getLigado(true) && !$this->getTocando()) {
				$this->setTocando(true);
			}

		}

		public function pause() {

			if ($this->getLigado(true) && $this->getTocando()) {
				$this->setTocando(false);
			}

		}

		//Métodos especiais Getters e Setters
		private function getVolume() {
			return $this->volume;
		}

		private function setVolume($v) {
			$this->volume = $v;
		}

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

	}
?>