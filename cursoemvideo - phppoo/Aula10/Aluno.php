<?php 
    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        // Atributos
        private $matricula;
        private $curso;

        // Método principal
        public function cancelarMatricula() {
            echo "<p>Matrícula será cancelada!</p>";
        }

        // Métodos especiais
        public function getMatricula() {
            return $this->matricula;
        }
        

        public function setMatricula($m) {
            $this->matricula = $m;
        }

        public function getCurso() {
            return $this->curso;
        }
        
        public function setCurso($c){
            $this->curso = $c;
        }
}