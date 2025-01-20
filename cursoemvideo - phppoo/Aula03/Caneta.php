<?php 
    class Caneta {
        // Atributos
        # OBS: Por padrão, a visibilade do atributo é público
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        // Métodos
        public function rabiscar() {
            if ($this->tampada) {
                echo "<p>ERRO! Não posso rabiscar!</p>";
            } else {
                echo "<p>Estou rabiscando...</p>";
            }        
        }

        public function tampar() {
            $this->tampada = true;
        }

        public function destampar() {
            $this->tampada = false;
        }
    }
?>