<?php
    class Lutador {
        // Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;



        // Métodos especiais
        public function __construct($n, $nac, $i, $a, $p, $v, $d, $e) {
            $this->nome = $n;
            $this->nacionalidade = $nac;
            $this->idade = $i;
            $this->altura = $a;
            $this->setPeso($p);
            $this->vitorias = $v;
            $this->derrotas = $d;
            $this->empates = $e;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function setNacionalidade($n) {
            $this->nacionalidade = $n;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function setAltura($a) {
            $this->altura = $a;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function setPeso($p) {
            $this->peso = $p;
            $this->setCategoria();
        }

        public function getCategoria() {
            return $this->categoria;
        }

        private function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->peso <= 120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }

        public function getVitorias() {
            return $this->vitorias;
        }

        public function setVitorias($v) {
            $this->vitorias = $v;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }

        public function setDerrotas($d) {
            $this->derrotas = $d;
        }

        public function getEmpates() {
            return $this->empates;
        }

        public function setEmpates($e) {
            $this->empates = $e;
        }



        // Métodos principais
        public function apresentar() {
            echo "<p>-----------------------------------</p>";
            echo "<p>CHEGOU A HORA!</p>";
            echo "Lutador: ".$this->getNome()."<br>";
            echo "Origem: ".$this->getNacionalidade()."<br>";
            echo $this->getIdade()." anos<br>";
            echo $this->getAltura()." metros de altura<br>";
            echo "Pesando ".$this->getPeso()."kg<br>";
            echo "Ganhou: ".$this->getVitorias()."<br>";
            echo "Perdeu: ".$this->getDerrotas()."<br>";
            echo "Empatou: ".$this->getEmpates()."<br>";
            echo "<p>-----------------------------------</p>";
        }

        public function status() {
            echo "<p>-----------------------------</p>";
            echo $this->getNome();
            echo "<br>é um peso ".$this->getCategoria();
            echo "<br>".$this->getVitorias(). " vitórias";
            echo "<br>".$this->getDerrotas(). " derrotas";
            echo "<br>".$this->getEmpates(). " empates";
            echo "<p>-----------------------------</p>";
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

    }