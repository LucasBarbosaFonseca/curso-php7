<?php

/* Métodos Especiais
São os métodos que nos permitem manipular não diretamente os atributos de uma classe garantindo assim muito 
mais segurança, dentre esses métodos especiais estão o método acessor Getter, o método modificador Setter e
o método Construct.

- Getter (get): Esse método da acesso seguro aos atributos, precisamos criar um para cada atributo da classe
e normalmente não vai parametro. Ex:

public function getAtributo() {
	return $this->modelo;
}

- Setter (set): Esse método podemos modificar com segurança os atributos, precisamos criar um para cada atributo 
da classe e nesse método vai parametro. Ex:

public function setAtributo($a) {
	$this->modelo = $a;
}

- Construct (construtor): Esse método inicia o objeto quando é instanciado executando o que estiver dentro 
do método. Ex:

public function __construct() { 
	$this->cor = "Azul";
	$this->tampar();
}

Também podemos usar método construtor passando o parâmetro dos atributos:

public function __construct($m, $c, $p) { 
	$this->setModelo($m);
	$this->setCor($c);
	$this->setPonta($p);
	$this->tampar();
}

*/

class Caneta {
	
	//Atributos
	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;

	//Metódo Construtor
	/* 
	public function __construct() {
		$this->setCarga(100);
		$this->Tampar();
	}
	*/

	//Método construtor mais complexo, com passagem de parametros 
	public function __construct($car) {
		$this->setCarga($car);
		$this->Tampar();
	}

	//Métodos
	public function Rabiscar() {

		if ($this->getTampada(true)) {
			echo "<p>ERRO: Não posso rabiscar, pois a caneta está tampada!</p>";
		}
		else {
			echo "<p>Estou rabiscando...</p>";
		}

	}

	public function Tampar() {
		$this->setTampada(true);
	}

	public function Destampar() {
		$this->SetTampada(false);
	}

	//Métodos Especiais Get e Set
	public function getModelo() {
		return $this->modelo; 
	}

	public function setModelo($m) {
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

	public function getCarga() {
		return $this->carga;
	}

	public function setCarga($car) {
		$this->carga = $car;
	}

	public function getTampada() {
		return $this->tampada;
	}

	public function setTampada($t) {
		$this->tampada = $t;
	}

}

?>