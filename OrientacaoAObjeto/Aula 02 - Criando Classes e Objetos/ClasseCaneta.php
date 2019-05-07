<?php

	/*
	Classe: 
	A classe é como se fosse um molde de um biscoito e quando o molde é instanciado um biscoito é criado
	a partir desse molde, ou seja, quando a classe é instanciada um objeto é criado a partir da classe. Nos
	conceitos de orientação a objetos uma classe para ser uma classe precisa ter respostas para 3 perguntas,
	sendo essas perguntas: O que a classe tem? O que a classe faz? Como a classe está no momento atual?

	Atributos:
	São as características que a classe tem, por exemplo, se a classe for classe caneta, a caneta tem
	modelo, marca, cor, ponta, se está tampada etc.

	Métodos: 
	São as acões que a classe faz, por exemplo, se a classe for caneta, a caneta escreve, rabisca, pinta, 
	tampa e destampa.

	Estados: 
	São os estados que a classe está no momento, por exemplo, se a classe for caneta, a caneta pode estar
	tampada ou destampada, escrevendo ou não, com 50% de carga ou 100% de carga.
	
	Objeto:
	Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas 
	características, comportamentos e estado atual. Quando instanciamos uma classe nós criamos um objeto.
	A classe é como se fosse um modelo e o objeto instanciado é o resultado desse modelo. 

	Palavra $this:
	Serve para mexermos com atributos dentro dos métodos da classe. Diz dentro do método que aquele 
	atributo pertence aquela classe, fazendo uma referência.
	*/

	class Caneta {

		//Atributos
		var $modelo;
		var $cor;
		var $ponta;
		var $carga;
		var $tampada;

		//Métodos
		function rabiscar() {

			if ($this->tampada == true) {
				echo "<p>ERRO: Não é possível rabiscar, pois a caneta está tampada!</p>";
			}
			else {
				echo "<p>Estou rabiscando...</p>";
			}

		}

		function tampar() {
			$this->tampada = true;
		}

		function destampar() {
			$this->tampada = false;
		}

	}
?>