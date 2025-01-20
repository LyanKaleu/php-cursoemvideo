<?php 
    class ContaBanco {
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Construtor
        public function __construct($nc, $t, $d) {
            $this->numConta = $nc;
            $this->tipo = $t;
            $this->dono = $d;
            $this->saldo = 0;
            $this->status = false;
            echo "<h2>Conta criada com sucesso!</h2>";
        }
        
        // Getters e Setters
        public function getNumConta () {
            return $this->numConta;
        }
        
        public function setNumConta ($n) {
            $this->numConta = $n;
        }

        public function getTipo () {
            return $this->tipo;
        }

        public function setTipo ($t) {
            $this->tipo = $t;
        }

        public function getDono () {
            return $this->dono;
        }

        public function setDono ($d) {
            $this->dono = $d;
        }

        public function getSaldo () {
            return $this->saldo;
        }

        public function setSaldo ($valor) {
            $this->saldo = $valor;
        }

        public function getStatus () {
            return $this->status;
        }

        public function setStatus ($s) {
            $this->status = $s;
        }

        // Métodos
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($this->tipo == 'cc'){
                $this->saldo = 50;
            } elseif ($this->tipo == 'cp'){
                $this->saldo = 150;
            }
        }

        public function fecharConta() {
            if ($this->saldo == 0) {
                $this->status = false;
                echo "<h2>Conta de ".$this->getDono()." fechada com sucesso!</h2>";
            } elseif ($this->saldo > 0) {
                echo "<h2>Não é possível fechar a conta! Pois você deve sacar o dinheiro!</h2>";
            } else {
                echo "<h2>Não é possível fechar a conta! Pois a conta está em débito!</h2>";
            }         
        }

        public function depositar($valor) {
            if ($this->status) {
                $this->saldo += $valor;
                echo "<h2>Depósito de R$".number_format($valor, 2, ',', '.')." autorizado na conta de ".$this->getDono()."</h2>";
            } else {
                echo "<h2>Não é possível depositar! Pois a conta está fechada!</h2>";
            }
        }

        public function sacar($valor) {
            if ($this->status) {
                if ($this->saldo >= $valor) {
                    $this->saldo -= $valor;
                    echo "<h2>Saque de R$".number_format($valor, 2, ',', '.')." autorizado na conta de ".$this->getDono()."</h2>";
                } else {
                    echo "<h2>Não é possível sacar! Pois não é permitido realizar o saque com valor maior que seu saldo!</h2>";
                }
            } else {
                echo "<h2>Não é possível sacar! Pois a conta está fechada!</h2>";
            }
        }

        public function pagarMensal() {
            if ($this->status) {
                if ($this->tipo == 'cc') {
                    if ($this->saldo > 12) {
                        $this->saldo -= 12;
                        echo "<h2>Mensalidade de R$12,00 debitada na conta de ".$this->getDono()."</h2>";
                    } else {
                        echo "<h2>Não é possível pagar a mensalidade! Pois o saldo é insuficiente!</h2>";
                    }
                }
                if ($this->tipo == 'cp') {
                    if ($this->saldo > 20) {
                        $this->saldo -= 20;
                        echo "<h2>Mensalidade de R$20,00 debitada na conta de ".$this->getDono()."</h2>";
                    } else {
                        echo "<h2>Não é possível pagar a mensalidade! Pois o saldo é insuficiente!</h2>";
                    }
                }
            } else {
                echo "<h2>Não é possível pagar a mensalidade! Pois a conta está fechada!</h2>";
            }
        }
    }
?>