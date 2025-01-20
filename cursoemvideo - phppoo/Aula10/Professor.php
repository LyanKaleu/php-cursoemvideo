<?php 
    require_once 'Pessoa.php';
    
    class Professor extends Pessoa {
        // Atributos
        private $especialidade;
        private $salario;

        // Método principal
        public function receberAumento($valor) {
            $this->salario += $valor;
        }

        // Métodos especiais
        public function getEspecialidade() {
            return $this->especialidade;
        }

        public function setEspecialidade($e) {
            $this->especialidade = $e;
        }

        public function getSalario() {
            return $this->salario;
        }

        public function setSalario($s) {
            $this->salario = $s;
        }
    }