<?php
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    protected function ganharExp($n) {
        $this->experiencia += $n;
    }

    public function __construct($n, $i, $s) {
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $s;
        $this->experiencia = 0;
    }

	public function getNome() {
		return $this->nome;
	}
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	
	public function getIdade() {
		return $this->idade;
	}
	
	public function setIdade($idade) {
		$this->idade = $idade;
	}
	
	public function getSexo() {
		return $this->sexo;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}
	
	public function getExperiencia() {
		return $this->experiencia;
	}

	public function setExperiencia($experiencia) {
		$this->experiencia = $experiencia;
	}
}