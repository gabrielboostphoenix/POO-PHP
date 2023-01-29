<?php
    require_once "Pessoa.php";
    class Funcionario extends Pessoa {
        // Atributos
        private $setor;
        private $trabalhando;
        // Métodos importantes a serem implementados
        public function mudarTrabalho($novo_setor_de_trabalho) {
            $this->setSetor($novo_setor_de_trabalho);
        }
        // Métodos especiais
        public function getSetor() {
            return $this->setor;
        }
        public function setSetor($setor) {
            $this->setor = (string) $setor;
        }
        public function getTrabalhando() {
            return $this->trabalhando;
        }
        public function setTrabalhando($estado_de_trabalho) {
            $this->trabalhando = (bool) $estado_de_trabalho;
        }
    }
?>