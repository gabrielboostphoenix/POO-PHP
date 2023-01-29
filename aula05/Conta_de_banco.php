<?php
    class ContaBanco {
        # Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        # Métodos
        public function abrirConta($tipo_da_conta) {
            $this->setTipo($tipo_da_conta);
            if ($this->getTipo() == 'CC') {
                $this->setSaldo(50);
            } else if ($this->getTipo() == 'CP') {
                $this->setSaldo(150);
            }
            $this->setStatus(true);
        }
        public function fecharConta() {
            if ($this->getSaldo() < 0 || $this->getStatus() == false) {
                echo "<p>Operação Inválida! Possivelmente o saldo bancário desta conta esteja negativo ou então esta mesma já esteja desativada.</p>";
            } else if ($this->getSaldo() > 0 || $this->getStatus() == false) {
                echo "<p>Operação Inválida! Possivelmente o saldo bancário desta conta esteja positivo ou então esta mesma já esteja desativada.</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta Bancária de ".($this->getDono())." foi fechada e encerrada com sucesso!</p>";
            }
        }
        public function depositar($valor) {
            if ($this->getStatus() == true) {
                $valor_a_ser_depositado = $this->getSaldo() + $valor;
                $this->setSaldo($valor_a_ser_depositado);
                echo "<p>Depósito de R$:".(number_format($valor, 2, ',', '.'))." autorizado na conta de ".($this->getDono())."</p>";
            } else {
                echo "<p>Erro! Operação Inválida! Verifique se esta conta está aberta para depositar.</p>";
            }
        }
        public function sacar($valor) {
            if ($this->getStatus() == true && $this->getSaldo() >= $valor) {
                $valor_a_ser_sacado = $this->getSaldo() - $valor;
                $this->setSaldo($valor_a_ser_sacado);
                echo "<p>Saque de R$:".(number_format($valor, 2, ',', '.'))." autorizado na conta da ".($this->getDono())."</p>";
            } else {
                echo "<p>Erro! Operação Inválida! Verifique se esta conta está aberta ou confira o saldo bancário desta mesma para sacar.</p>";
            }
        }
        public function pagarMensalidade() {
            if ($this->getTipo() == 'CC') {
                $mensalidade = $this->getSaldo() - 12;
                $this->setSaldo($mensalidade);
                echo "<p>Mensalidade de R$:12,00 cobrada na conta de ".($this->getDono())."</p>";
            } else if ($this->getTipo() == 'CP') {
                $mensalidade = $this->getSaldo() - 20;
                $this->setTipo($mensalidade);
                echo "<p>Mensalidade de R$:20,00 cobrada na conta de ".($this->getDono())."</p>";
            }
        }
        # Métodos Especiais (Getters & Setters)
        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta Criada com Sucesso!</p>";
        }
        public function getnumConta() {
            return $this->numConta;
        }
        public function setnumConta($numero_da_conta) {
            $this->numConta = (int) $numero_da_conta;
        }
        public function getTipo() {
            return $this->tipo;
        }
        public function setTipo($tipo_da_conta) {
            $this->tipo = (string) $tipo_da_conta;
        }
        public function getDono() {
            return $this->dono;
        }
        public function setDono($proprietario_da_conta) {
            $this->dono = (string) $proprietario_da_conta;
        }
        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($saldo_da_conta) {
            $this->saldo = (float) $saldo_da_conta;
        }
        public function getStatus() {
            return $this->status;
        }
        public function setStatus($estado_da_conta) {
            $this->status = (bool) $estado_da_conta;
        }
    }
?>