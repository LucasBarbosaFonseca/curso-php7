<?php

    require_once 'ClassPessoa.php';
    require_once 'InterfacePublicacao.php';

    class Livro implements Publicacao {

        //Atributos
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //Método Construtor 
        public function __construct($t, $a, $tp, $l) {
            $this->setTitulo($t);
            $this->setAutor($a);
            $this->setTotPaginas($tp);
            $this->setAberto(false);
            $this->setPagAtual(0);
            $this->setLeitor($l);
        }

        //Métodos de Comportamento 
        public function detalhes() {

            echo "<br>";
            echo "O livro " .$this->getTitulo(). " escrito pelo autor " .$this->getAutor();
            echo "<br> Contém " .$this->getTotPaginas(). " páginas";
            echo "<br> O leitor está atualmente na página " .$this->getPagAtual();
            echo "<br> Sendo lido pelo leitor " .$this->leitor->getNome();

        }
        
        public function abrir() {

            $this->setAberto(true);

        }

        public function fechar() {

            $this->setAberto(false);

        }

        public function folhear($p) {

            if ($p > $this->getTotPaginas()) {
                
                $this->setPagAtual(0);

            } else {

                $this->setPagAtual($p);

            }

        }

        public function avancarPag() {

            $this->pagAtual ++ ;
            
        }

        public function voltarPag() {

            $this->pagAtual -- ;

        }      

        //Métodos Getters e Setters
        private function getTitulo() {
            return $this->titulo;
        }

        private function setTitulo($t) {
            $this->titulo = $t;
        }

        private function getAutor() {
            return $this->autor;
        }

        private function setAutor($a) {
            $this->autor = $a;
        }

        private function getTotPaginas() {
            return $this->totPaginas;
        }

        private function setTotPaginas($tp) {
            $this->totPaginas = $tp;
        }

        private function getPagAtual() {
            return $this->pagAtual;
        }

        private function setPagAtual($pa) {
            $this->pagAtual = $pa;
        }

        private function getAberto() {
            return $this->aberto;
        }

        private function setAberto($ab) {
            $this->aberto = $ab;
        }

        private function getLeitor() {
            return $this->leitor;
        }

        private function setLeitor($l) {
            $this->leitor = $l;
        }

    }

?>