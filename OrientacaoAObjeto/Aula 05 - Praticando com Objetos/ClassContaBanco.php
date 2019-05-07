<?php

	class ContaBancaria {

		//Atributus
		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;

		//Método Construtor 
		public function __construct() {
			$this->setSaldo(0);
			$this->setStatus(false);
		}

		//Métodos de comportamento 
		public function abrirConta($t) {
			$this->setTipo($t);
			$this->setStatus(true);

			if ($t == "cc") {
				$this->setSaldo(50);
			}
			elseif ($t == "cp") {
				$this->setSaldo(150);
			}
		}

		public function depositar($valor) {
			if ($this->getStatus(true)) {
				
				$this->setSaldo($this->getSaldo() + $valor);

				echo "Foi depositado R$ ".$valor." reais em sua conta.";

			}
			else {

				echo "Impossível depositar, pois a conta está fechada.";

			}
		}

		public function sacar($valor) {
			if ($this->getStatus(true)) {
				
				$this->setSaldo($this->getSaldo() - $valor);

				echo "Foi sacado R$ ".$valor." reais de sua conta.";

			}
			else {

				echo "Impossível sacar, pois a conta está fechada.";

			}
		}

		public function pagarMensalidade() {
			$valor;

			if ($this->getTipo("cc")) {
				$valor = 12;
			}
			elseif ($this->getTipo("cp")) {
				$valor = 20;
			}

			if ($this->getStatus(true)) {
				
				if ($this->getSaldo() > $valor) {
					$this->setSaldo($this->getSaldo() - $valor);
				}
				else {
					echo "Impossível pagar taxa mensal, saldo insuficiente.";
				}

			}
			else {

				echo "Conta fechada, impossível pagar taxa mensal.";

			}
		}

		public function fecharConta() {
			if ($this->getSaldo() > 0) {
				echo "Impossível fechar a conta, pois está com dinheiro.";
			}
			elseif ($this->getSaldo() < 0) {
				echo "Impossível fechar a conta, pois está em débito.";
			}
			else {
				$this->setStatus(false);
			}
		}
		
		//Getters e Setters
		public function getNumConta() {
			return $this->numConta;
		}

		public function setNumConta($nc) {
			$this->numConta = $nc;
		}

		public function getTipo() {
			return $this->tipo;
		}

		public function setTipo($t) {
			$this->tipo = $t;
		}

		public function getDono() {
			return $this->dono;
		}

		public function setDono($d) {
			$this->dono = $d;
		}

		public function getSaldo() {
			return $this->saldo;
		}

		public function setSaldo($sal) {
			$this->saldo = $sal;
		}

		public function getStatus() {
			return $this->status;
		}

		public function setStatus($sta) {
			$this->status = $sta;
		}
	}

?>