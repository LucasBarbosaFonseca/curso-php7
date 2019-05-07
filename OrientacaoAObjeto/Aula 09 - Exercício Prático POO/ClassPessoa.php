<?php 

    require_once 'InterfacePessoa.php';

    class Pessoa implements PessoaInterface {

        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        public function __construct($n, $i, $s) {
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }

        //Método de comportamento 
        public function fazerAniversario() {
            $this->setIdade($this->getIdade() + 1);
        }

        //Métodos Getters e Setters
        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($s) {
            $this->sexo = $s;
        }

    }

?>