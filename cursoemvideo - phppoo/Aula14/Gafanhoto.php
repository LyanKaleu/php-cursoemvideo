<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistido;

    public function assistirMaisUm() {
        $this->totAssistido++;
    }

    public function __construct($nome, $idade, $sexo, $l) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $l;
        $this->totAssistido = 0;
    }

	public function getLogin() {
		return $this->login;
	}

	public function setLogin($login) {
		$this->login = $login;
	}

	public function getTotAssistido() {
		return $this->totAssistido;
	}

	public function setTotAssistido($totAssistido) {
		$this->totAssistido = $totAssistido;
	}
}