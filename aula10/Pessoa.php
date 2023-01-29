<?php
    class Pessoa {
        // Atributos
        private $nome;
        private $idade;
        private $sexo;
        // Métodos importantes a serem implementados
        public function fazerAniversario() {
            $this->setIdade($this->getIdade() + 1);
        }
        // Métodos especiais: Gettters and Setters
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            $this->nome = (string) $nome;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            $this->idade = (int) $idade;
        }
        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($sexo) {
            $this->sexo = (string) $sexo;
        }
    }
?>