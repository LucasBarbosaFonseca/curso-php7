<?php

class ContaBancaria {

    public $numConta;
    public $dono;
    private $tipo;
    public $banco;
    protected $saldo;
    protected $status;

    public function AbrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "cp") {
            $this->setSaldo(50);
        }
        elseif ($t == "cc") {
            $this->setSaldo(150);
        }

    }

    public function Depositar($valor) {
        if ($this->getStatus(true)) {
            
            $this->setSaldo($this->getSaldo() + $valor);

            echo "Você depositou R$ ".$valor." reais em sua conta...!";

        }
        else {
            echo "Impossível depositar, a conta está fechada...!";
        }
    }

    public function Sacar($valor) {
        if ($this->getStatus(true)) {

            $this->setSaldo($this->getSaldo() - $valor);

            echo "Você sacou R$ ".$valor." reais de sua conta.";

        }
        else {
            echo "Impossível sacar, a sua conta está fechada!";
        }
    }

    public function FecharConta() {
        if ($this->getSaldo() > 0) {
            
            echo "Impossível fechar sua conta, pois ainda tem dinheiro nela.";

        }
        elseif ($this->getSaldo() < 0) {
            echo "Impossível fechar sua conta, pois você tem dividas.";
        }
        else {
            $this->setStatus(false);
        }
        
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($nc) {
        $this->numConta = $nc;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($d) {
        $this->dono = $d;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($t) {
        $this->tipo = $t;
    }

    public function getBanco() {
        return $this->banco;
    }

    public function setBanco($b) {
        $this->banco = $b;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($sal) {
        $this->saldo = $sal;
    }

    public function getStatus() {
        return $this->saldo;
    }

    public function setStatus($st) {
        $this->status = $st;
    }

}

?>