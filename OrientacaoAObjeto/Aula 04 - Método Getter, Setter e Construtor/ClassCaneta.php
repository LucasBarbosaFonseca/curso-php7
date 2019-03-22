<?php

	class Caneta {

		public $modelo;
		private $cor;
		private $ponta;
		private $tampada;

		//Nesse método os valores são setados como argumentos dentro da instância 
		public function __construct($m, $c, $p) { //Método Construtor mais complexo 
			$this->setModelo($m);
			$this->setCor($c);
			$this->setPonta($p);
			$this->tampar();
		}

		/*
		//Método Construtor inicia o objeto do jeito especificado quando é instanciado
		public function __construct() { 
			$this->cor = "Azul";
			$this->tampar();
		}
		*/

		public function tampar() {
			$this->tampada = true;
		}

		public function getModelo() { //Método Get obtém o resultado 
			return $this->modelo;
		}

		public function setModelo($m) { //Método Set adiciona valor 
			$this->modelo = $m;
		}

		public function getCor() {
			return $this->cor;
		}

		public function setCor($c) {
			$this->cor = $c;
		}

		public function getPonta() {
			return $this->ponta;
		}

		public function setPonta($p) {
			$this->ponta = $p;
		}

	}

?>