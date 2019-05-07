<?php

/* Modificadores de Visibilidade 
Os modificadores indicam o nível de acesso aos componentes internos de uma classe. Os componentes 
internos de uma classe são os atributos e métodos da classe. Ps modificadores de acesso são:

	- Public (público): Público significa que todas as outras tem acesso aquele atributos ou métodos daquela classe.
	  No diagrama de classes da UML o modificador público é representado pelo + . 
	
	- Private (privado): Privado significa que só a própria classe tem acesso a seus próprios atributos ou métodos.
	  No diagrama de classes da UML o modificador privado é representado pelo - . 
	  
	= Protected (protegido): Protegido significa que só a classe e suas classes filhas tem acesso a seus próprios
	  atributos e métodos. No diagrama de classes da UML o modificador protegido é representado pelo # . */

	class Caneta {

		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

		public function rabiscar() {

			if ($this->tampada == true) {
				echo "<p>ERRO: Não posso rabiscar, pois a caneta está tampada!</p>";
			}
			else {
				echo "<p>Estou rabiscando...</p>";
			}

		}

		public function tampar() {

			$this->tampada = true;

		}

		public function destampar() {

			$this->tampada = false;

		}

	}

?>