<?php

    require_once 'ClassPessoa.php';

    class Aluno extends Pessoa {

        //Atributos
        private $matricula;
        private $curso;

        //Método de Comportamento 
        public function pagarMensalidade() {
            echo "<p>Pagando Mensalidade do aluno ".$this->getNome()."</p>";
        }

        //Métodos Getters e Setters
        public function getMatricula() {
            return $this->matricula;
        }

        public function setMatricula($m) {
            $this->matricula = $m;
        }

        public function getCurso() {
            return $this->curso;
        }

        public function setCurso($c) {
            $this->curso = $c;
        }

    }

?>