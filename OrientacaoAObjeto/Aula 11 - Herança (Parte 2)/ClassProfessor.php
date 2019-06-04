<?php

    require_once 'ClassPessoa.php';

    class Professor extends Pessoa {

        //Atributos
        private $especialidade;
        private $salario;

        //Método de comportamento 
        public function receberAumento($aum) {
            $this->setSalario($this->getSalario() + $aum);
        }

        //Métodos Getters e Setters
        public function getEspecialidade() {
            return $this->especialidade;
        }

        public function setEspecialidade($e) {
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