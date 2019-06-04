<?php

    //Classe filha ou sub-classe da classe Pessoa
    require_once 'ClassPessoa.php';

    class Funcionario extends Pessoa {

        //Atributos
        private $setor;
        private $trabalhando;

        //Método de Comportamento 
        public function mudarTrabalho() {
            $this->trabalhando = ! $this->trabalhando;
        }

        //Métodos Getters e Setters
        public function getSetor() {
            return $this->setor;
        }

        public function setSetor($s) {
            $this->setor = $s;
        }

        public function getTrabalhando() {
            return $this->trabalhando;
        }

        public function setTrabalhando($t) {
            $this->trabalhando = $t;
        }

    }

?>