<?php

    require_once 'LutadorInterface.php';

    class Lutador implements LutadorInterface {

        //Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //Métodos de comportamento
        public function apresentar() {
            echo "<p>---------------------------------------------------------</p>";
            echo "<p>Lutador: " .$this->getNome(). "</p>";
            echo "<p>Origem: " .$this->getNacionalidade(). "</p>";
            echo "<p>" .$this->getIdade(). " anos</p>";
            echo "<p>" .$this->getAltura(). " m de altura</p>";
            echo "<p>Pesando: " .$this->getPeso(). " Kg</p>";
            echo "<p>Ganhou: " .$this->getVitorias(). "</p>";
            echo "<p>Perdeu: " .$this->getDerrotas(). "</p>";
            echo "<p>Empatou: " .$this->getEmpates(). "</p>";
        }

        public function status() {
            echo "<p>--------------------------------------------------------------------------------</p>";
            echo "<p>" .$this->getNome(). " é um peso " .$this->getCategoria(). " com " .$this->getVitorias(). " vitorias, "
            .$this->getDerrotas(). " derrotas e " .$this->getEmpates(). " empates.</p>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        //Métodos Especiais 
        public function __construct($no, $na, $i, $a, $p, $v, $d, $e) {
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($i);
            $this->setAltura($a);
            $this->setPeso($p);
            $this->setVitorias($v);
            $this->setDerrotas($d);
            $this->setEmpates($e);
        }

        private function getNome() {
            return $this->nome;
        }

        private function setNome($no) {
            $this->nome = $no;
        }

        private function getNacionalidade() {
            return $this->nacionalidade;
        }

        private function setNacionalidade($na) {
            $this->nacionalidade = $na;
        }

        private function getIdade() {
            return $this->idade;
        }

        private function setIdade($i) {
            $this->idade = $i;
        }

        private function getAltura() {
            return $this->altura;
        }

        private function setAltura($a) {
            $this->altura = $a;
        }

        private function getPeso() {
            return $this->peso;
        }

        private function setPeso($p) {
            $this->peso = $p;
            $this->setCategoria();
        }

        private function getCategoria() {
            return $this->categoria;
        }

        private function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->categoria = "Inválido";
            }
            elseif ($this->getPeso() <= 70.3) {
                $this->categoria = "Leve";
            }
            elseif ($this->getPeso() <= 83.9) {
                $this->categoria = "Médio";
            }
            elseif ($this->getPeso() <= 120.2) {
                $this->categoria = "Pesado";
            }
            else {
                $this->categoria = "Inválido";
            }
        }

        private function getVitorias() {
            return $this->vitorias;
        }

        private function setVitorias($v) {
            $this->vitorias = $v;
        }

        private function getDerrotas() {
            return $this->derrotas;
        }

        private function setDerrotas($d) {
            $this->derrotas = $d;
        }

        private function getEmpates() {
            return $this->empates;
        }

        private function setEmpates($e) {
            $this->empates = $e;
        }

    }

?>