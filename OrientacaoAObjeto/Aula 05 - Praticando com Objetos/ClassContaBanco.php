<?php

	class ContaBancaria {

		//Atributos
		public $NumConta;
		protected $Tipo;
		private $Dono;
		private $Saldo;
		private $Status;

		//Método construtor simples que seta valores para quando objeto for instanciado
		public function __construct() {
			$this->setSaldo(0);
			$this->setStatus(false);
		}

		//Métodos de comportamento da classe
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

		public function fecharConta() {
			if ($this->getSaldo() > 0) {
				echo "<p>Essa conta não pode ser fechada, pois a mesma tem dinheiro...</p>";
			}
			elseif ($this->getSaldo() < 0) {
				echo "<p>Essa conta não pode ser fechada, pois a mesma esta em débito...</p>";
			}
			else {
				$this->setStatus(false);
				echo "<p>Conta fechada...</p>";
			}
		}

		public function depositar($v) {
			if ($this->getStatus(true)) {
				$this->setSaldo($this->getSaldo() + $v);

				//Permitido fazer do modo acima como o abaixo 
				//$this->Saldo = $this->Saldo + $v

				echo "<p>Você depositou R$ ".$v." reais em sua conta...</p>";
			}
			else {
				echo "<p>Conta fechada, impossível depositar...</p>";
			}
		}

		public function sacar($v) {
			if ($this->getStatus(true)) {

				if ($this->getSaldo() > $v) {
					$this->setSaldo($this->getSaldo() - $v);
					echo "<p>Você sacou R$ ".$v." reais de sua conta...</p>";
				}
				else {
					echo "<p>Saldo insuficiente para realizar saque...</p>";
				}

			}
			else {
				echo "<p>Conta  fechada, impossível sacar...</p>";
			}
		}

		public function pagarMensal() {
			$v;

			if ($this->getTipo("cc")) {
				$v = 12;
			}
			elseif ($this->getTipo("cp")) {
				$v = 20;
			}

			if ($this->getStatus(true)) {
				
				if ($this->getSaldo() > $v) {
					$this->setSaldo($this->getSaldo() - $v);
					echo "<p>Mensalidade paga com sucesso...</p>";
				}
				else {
					echo "<p>Impossível pagar mensalidade, saldo insuficiente...</p>";
				}

			}
			else {
				echo "<p>Conta fechada, impossível pagar mensalidade...</p>";
			}
		}

		//Getters e Setters dos atributos
		public function getNumConta() {
			return $this->NumConta;
		}

		public function setNumConta($n) {
			$this->NumConta = $n;
		}

		public function getTipo() {
			return $this->Tipo;
		}

		public function setTipo($t) {
			$this->Tipo = $t;
		}

		public function getDono() {
			return $this->Dono;
		}

		public function setDono($d) {
			$this->Dono = $d;
		}

		public function getSaldo() {
			return $this->Saldo;
		}

		public function setSaldo($sal) {
			$this->Saldo = $sal;
		}

		public function getStatus() {
			return $this->Status;
		}

		public function setStatus($sta) {
			$this->Status = $sta;
		}

	}

?>