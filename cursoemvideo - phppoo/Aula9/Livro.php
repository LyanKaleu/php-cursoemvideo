<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($t, $a, $tot, $l) {
            $this->titulo = $t;
            $this->autor = $a;
            $this->totPaginas = $tot;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $l;
        }

        

        public function detalhes() {
            echo "<hr>Livro {$this->titulo} escrito por {$this->autor}";
            echo "<br>Páginas: {$this->totPaginas}<br>Página atual: {$this->pagAtual}";
            echo "<br>Sendo lido por {$this->leitor->getNome()}<br>";
        }

        public function abrir() {
            $this->aberto = true;
        }

        public function avancarPagina() {
            if ($this->pagAtual + 1 > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual++;
            }
        }
    
        public function fechar() {
            $this->aberto = false;
        }

        public function folhear($p) {
            if ($p > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }

        public function voltarPagina() {
            if ($this->pagAtual - 1 < 0) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual--;
            }
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getTotPaginas() {
            return $this->totPaginas;
        }
        
        public function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }

        public function getPagAtual() {
            return $this->pagAtual;
        }

        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }

        public function getAberto() {
            return $this->aberto;
        }

        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        
        public function getLeitor() {
            return $this->leitor;
        }

        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
}
