<?php 

    //Classe filha ou sub-classe da classe Pessoa
    require_once 'ClassPessoa.php';

    class Professor extends Pessoa {
        
        //Atributos
        private $especialidade;
        private $salario;

        //Método de Comportamento 
        public function ReceberAum($aum) {
            $this->setSalario($this->getSalario() + $aum);
        }

        //Métodos Getters e Setters
        public function getEspec() {
            return $this->especialidade;
        }

        public function setEspec($e) {
            $this->especialidade = $e;
        }

        public function getSalario() {
            return $this->salario;
        }

        public function setSalario($s) {
            $this->salario = $s;
        }

    }
    

?>