<?php

    /* Colocando a classe lutador ClassLutador.php nessa classe porque os atributos desafiado e
    desafiante vão ser objetos instanciados da classe lutador ClassLutador.php */
    require_once 'ClassLutador.php';

    class Luta {

        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //Métodos de comportamento
        public function marcarLuta($l1, $l2) {

            if (($l1->getCategoria() == $l2->getCategoria()) && ($l1 != $l2)) {
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }
            else {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }

        }

        public function lutar() {

            if ($this->getAprovada(true)) {

                /* Como está sendo usado atributos dessa classe que são objetos instanciados
                da classe lutador e estamos usando métodos de comportamento da outra classe também,
                podemos usar os métodos da outra classe com os atributos dessa classe que são 
                objetos instaciados da outra classe da forma abaixo: */
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();

                $vencedor = rand(0, 2);

                switch ($vencedor) {
                    case '0': //Luta empatada
                        echo "Empatou!";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();

                        break;

                    case '1': //Desafiado ganhou a luta 
                        echo "O desafiado " .$this->desafiado->getNome(). " ganhou a luta!";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();

                        break;
                    
                    case '2': //Desafiante ganhou a luta
                        echo "O desafiante " .$this->desafiante->getNome(). " ganhou a luta!";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();

                        break;
                }

            }
            else {
                echo "A luta não pode acontecer";
            }

        }

        //Métodos especiais 
        public function getDesafiado() {
            return $this->desafiado;
        }

        public function setDesafiado($dd) {
            $this->desafiado = $dd;
        }

        public function getDesafiante() {
            return $this->desafiante;
        }

        public function setDesafiante($dt) {
            $this->desafiante = $dt;
        }

        public function getRounds() {
            return $this->rounds;
        }

        public function setRounds($r) {
            $this->rounds = $r;
        }

        public function getAprovada() {
            return $this->aprovada;
        }

        public function setAprovada($a) {
            $this->aprovada = $a;
        }

    }

?>