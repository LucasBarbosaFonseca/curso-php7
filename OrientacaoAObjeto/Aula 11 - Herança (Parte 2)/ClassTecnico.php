<?php

    require_once 'ClassAluno.php';

    class Tecnico extends Aluno {

        //Atributo
        private $regProfissional;

        //Método de Comportamento 
        public function praticar() {
            echo "<p>O aluno técnico ".$this->getNome()." está praticando...</p>";
        }

        //Métodos Getter e Setter
        public function getRegProfissional() {
            return $this->regProfissional;
        }

        public function setRegProfissional($r) {
            $this->regProfissional = $r;
        }

    }

?>