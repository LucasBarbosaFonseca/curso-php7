<?php

    require_once 'ClassAluno.php';

    class Bolsista extends Aluno {

        //Atributos
        private $bolsa;

        //Método de comportamento 

        /* Esse método está sobrescrevendo o método de sua classe progenitora,
           os metodos tem o mesmo nome, fazem a mesma coisa mas são escritos de
           maneiras diferentes */ 
        public function pagarMensalidade() {
            echo "<p>".$this->getNome()." é bolsista! Então paga com desconto!</p>";
        }

        public function renovarBolsa() {
            echo "<p>Bolsa renovada</p>";
        }

        //Método Getters e Setter
        public function getBolsa() {
            return $this->bolsa;
        }

        public function setBolsa($b) {
            $this->bolsa = $b;
        }
        
    }

?>