<?php
    require_once 'Pessoa.php';

    class Funcionario extends Pessoa {
        // Atributos
        private $setor;
        private $trabalhando;

        // Método principal
        public function mudarTrabalho() {
            $this->trabalhando = !$this->trabalhando;
        }

        // Métodos especiais
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