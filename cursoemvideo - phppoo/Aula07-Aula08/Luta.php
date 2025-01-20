<?php
/*
REGRAS DA LUTA

- SÓ PODE SER MARCADA ENTRE LUTADORES DA MESMA CATEGORIA;
- DESAFIADO E DESAFIANTE DEVEM SER LUTADORES DIFERENTES;
- SÓ PODE ACONTECER SE ESTIVER APROVADA;
- SÓ PODE TER COMO RESULTADO A VITÓRIA DE UM DOS LUTADORES OU O EMPATE
*/

require_once 'Lutador.php';
class Luta {
    // Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;



// Métodos especiais
public function getDesafiado() {
    return $this->desafiado;
}

public function setDesafiado($d) {
    $this->desafiado = $d;
}

public function getDesafiante() {
    return $this->desafiante;
}

public function setDesafiante($d) {
    $this->desafiante = $d;
}

public function getRounds() {
    return $this->rounds;
}

public function setRounds($r) {
    $this->rounds = $r;
}

public function getAprovada() {
    return $this->aprovada;
}

public function setAprovada($a) {
    $this->aprovada = $a;
}



    // Métodos principais
    public function marcarLuta($l1, $l2) {
        if (($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo "<h2>Empate!</h2>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<h2>".$this->desafiado->getNome()." venceu!</h2>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<h2>".$this->desafiante->getNome()." venceu!</h2>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<h2>A luta não pode acontecer! Pois não foi marcada!</h2>";
        }
    }
}