<?php
    require_once "Controlador.php";
    class ControleRemoto implements Controlador {
        // Atributos
        private $volume;
        private $ligado;
        private $tocando;
        // Métodos Especiais
        public function __construct() {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }
        private function getVolume() {
            return $this->volume;
        }
        private function setVolume($volume_do_controle_remoto) {
            $this->volume = (int) $volume_do_controle_remoto;
        }
        private function getLigado() {
            return $this->ligado;
        }
        private function setLigado($estado_do_controle_remoto) {
            $this->ligado = (bool) $estado_do_controle_remoto;
        }
        private function getTocando() {
            return $this->tocando;
        }
        private function setTocando($estado_do_controle_remoto) {
            $this->tocando = (bool) $estado_do_controle_remoto;
        }
        // Métodos (abstratos) da interface a serem implementados
        public function ligar() {
            $this->setLigado(true);
        }
        public function desligar() {
            $this->setLigado(false);
        }
        public function abrirMenu() {
            echo "<p>Estado do Controle Remoto Ligado: ".($this->getLigado())."</p>";
            echo "<p>Volume do Controle Remoto em ".($this->getVolume()).". Corresponde à ";
            for ($contador = 0; $contador <= $this->getVolume(); $contador+=10) {
                echo "|";
            }
            echo "</p>";
            echo "<p>Estado do Controle Remoto Tocando: ".($this->getTocando())."</p>";
        }
        public function fecharMenu() {
            echo "<p>Fechando Menu...</p>";
        }
        public function maisVolume() {
            if ($this->getLigado()) {
                if ($this->getVolume() >= 0 && $this->getVolume() <= 100) {
                    $volume_a_ser_aumentado = $this->getVolume() + 10;
                    $this->setVolume($volume_a_ser_aumentado);
                    echo "<p>Volume em ".($this->getVolume())."</p>";
                } else {
                    echo "<p>Erro! Não é possível aumentar o volume acima do limite de 100!</p>";
                }
            } else {
                echo "<p>Erro! Não é possível aumentar o volume com o controle remoto desligado!</p>";
            }
        }
        public function menosVolume() {
            if ($this->getLigado()) {
                if ($this->getVolume() >= 0 && $this->getVolume() <= 100) {
                    $volume_a_ser_diminuido = $this->getVolume() - 10;
                    $this->setVolume($volume_a_ser_diminuido);
                    echo "<p>Volume em ".($this->getVolume())."</p>";
                } else {
                    echo "<p>Erro! Não é possível diminuir o volume abaixo do limite de 0!</p>";
                }
            } else {
                echo "<p>Erro! Não é possível diminuir o volume com o controle remoto desligado!</p>";
            }
        }
        public function ligarMudo() {
            if ($this->getLigado()) {
                $this->setVolume(0);
                echo "<p>Modo mudo ativado!</p>";
            } else {
                echo "<p>Erro! Não é possível colocar no mudo pois o controle remoto está desligado!</p>";
            }
        }
        public function desligarMudo() {
            if ($this->getLigado()) {
                if ($this->getVolume() == 0) {
                    $this->setVolume(50);
                    echo "<p>Modo mudo desativado com sucesso!</p>";
                } else {
                    echo "<p>Erro! Não é possível desativar o modo mudo pois o volume está em ".($this->getVolume())."</p>";
                }
            } else {
                echo "<p>Erro! Não é possível desativar o modo mudo pois o controle remoto está desligado</p>";
            }
        }
        public function play() {
            if ($this->getLigado()) {
                if (!$this->getTocando()) {
                    $this->setTocando(true);
                    echo "<p>Controle Remoto tocando...</p>";
                } else {
                    echo "<p>Erro! Não é possível dar o play pois já está ativo!</p>";
                }
            } else {
                echo "<p>Erro! Não é possível dar o play pois o controle remoto está desligado!</p>";
            }
        }
        public function pause() {
            if ($this->getLigado()) {
                if ($this->getTocando()) {
                    $this->setTocando(false);
                    echo "<p>Controle Remoto em Pause</p>";
                } else {
                    echo "<p>Erro! Não é possível dar pause pois já está em pause!</p>";
                }
            } else {
                echo "<p>Erro! Não é possível dar pause pois o controle remoto está desligado!</p>";
            }
        }
    }
?>