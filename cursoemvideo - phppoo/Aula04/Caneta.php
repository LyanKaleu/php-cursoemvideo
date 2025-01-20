<?php 
    class Caneta {
        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        // Construtor
        public function __construct($m, $c, $p) { // Pode ser feito também: public function Caneta()
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        // Métodos principais
        public function tampar() {
            $this->tampada = true;
        }

        // Getters e Setters
        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($m) {
            $this->modelo = $m;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }       
    }
?>