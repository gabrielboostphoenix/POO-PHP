<?php
    require_once "Pessoa.php";
    class Professor extends Pessoa {
        // Atributos
        private $especialidade;
        private $salario;
        // Métodos importantes a serem implementados
        public function receberAumento($aumento_do_salario) {
            if ($aumento_do_salario > 0) {
                $this->setSalario($this->getSalario() + $aumento_do_salario);
            }
        }
        // Métodos especiais
        public function getEspecialidade() {
            return $this->especialidade;
        }
        public function setEspecialidade($especialidade) {
            $this->especialidade = (string) $especialidade;
        }
        public function getSalario() {
            return $this->salario;
        }
        public function setSalario($salario) {
            $this->salario = (float) $salario;
        }
    }
?>