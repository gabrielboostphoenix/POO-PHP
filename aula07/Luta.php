<?php
    require_once "Lutador.php";
    class Luta {
        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
        // métodos importantes a serem implementados
        public function marcarLuta($lutador_desafiado, $lutador_desafiante) {
            if (($lutador_desafiado->getCategoria() === $lutador_desafiante->getCategoria()) && ($lutador_desafiado != $lutador_desafiante)) {
                $this->setDesafiado($lutador_desafiado);
                $this->setDesafiante($lutador_desafiante);
                $this->setAprovada(true);
            } else {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
        public function lutar() {
            if ($this->getAprovada()) {
                $desafiante = $this->getDesafiante();
                $desafiante->apresentar();
                $desafiado = $this->getDesafiado();
                $desafiado->apresentar();
                $vencedor = rand(0, 2);
                switch ($vencedor) {
                    case 0:
                        $desafiante->empatarLuta();
                        $desafiado->empatarLuta();
                        break;
                    case 1:
                        echo "<p>O vencedor da luta foi o lutador ".($desafiado->getNome())."</p>";
                        $desafiado->ganharLuta();
                        $desafiante->perderLuta();
                        break;
                    case 2:
                        echo "<p>O vencedor da luta foi o lutador ".($desafiante->getNome())."</p>";
                        $desafiante->ganharLuta();
                        $desafiado->perderLuta();
                        break;
                }
            } else {
                echo "<p>Impossível lutar pois o estado de aprovação da luta não está ok! Tente marcar uma luta!</p>";
            }
        }
        // Métodos especiais
        public function getDesafiado() {
            return $this->desafiado;
        }
        public function setDesafiado($lutador_desafiado) {
            $this->desafiado = $lutador_desafiado;
        }
        public function getDesafiante() {
            return $this->desafiante;
        }
        public function setDesafiante($lutador_desafiante) {
            $this->desafiante = $lutador_desafiante;
        }
        public function getRounds() {
            return $this->rounds;
        }
        public function setRounds($quantidade_de_rounds) {
            $this->rounds = (int) $quantidade_de_rounds;
        }
        public function getAprovada() {
            return $this->aprovada;
        }
        public function setAprovada($estado_da_aprovacao) {
            $this->aprovada = (bool) $estado_da_aprovacao;
        }
    }
?>