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
        // Métodos especiais: Getters and Setters and Construct
        public function __construct($nome, $idade, $sexo) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }
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