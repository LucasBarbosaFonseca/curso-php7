<?php

    //Classe filha ou sub-classe da classe Pessoa
    require_once 'ClassPessoa.php';

    class Aluno extends Pessoa {

        //Atributos
        private $matricula;
        private $curso;

        //Método de comportamento 
        public function cancelarMatr() {
            echo "<p>Matrícula cancelada</p>";
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