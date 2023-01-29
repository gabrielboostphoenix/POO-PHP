<?php
    class Lutador {
        // Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
        // métodos especiais: Getters e Setters e Construct
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }
        function getNome() {
            return $this->nome;
        }
        function setNome($nome) {
            $this->nome = (string) $nome;
        }
        function getNacionalidade() {
            return $this->nacionalidade;
        }
        function setNacionalidade($nacionalidade) {
            $this->nacionalidade = (string) $nacionalidade;
        }
        function getIdade() {
            return $this->idade;
        }
        function setIdade($idade) {
            $this->idade = (int) $idade;
        }
        function getAltura() {
            return $this->altura;
        }
        function setAltura($altura) {
            $this->altura = (float) $altura;
        }
        protected function getPeso() {
            return $this->peso;
        }
        function setPeso($peso) {
            $this->peso = (float) $peso;
            $this->setCategoria();
        }
        function getCategoria() {
            return $this->categoria;
        }
        function setCategoria() {
            if ($this->getPeso() < 52.2) {
                $this->categoria = "Inválido";
            } else if ($this->getPeso() <= 70.3) {
                $this->categoria = "Leve";
            } else if ($this->getPeso() <= 83.9) {
                $this->categoria = "Médio";
            } else if ($this->getPeso() <= 120.3) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }
        function getVitorias() {
            return $this->vitorias;
        }
        function setVitorias($quantidade_de_vitorias) {
            $this->vitorias = (int) $quantidade_de_vitorias;
        }
        function getEmpates() {
            return $this->empates;
        }
        function setEmpates($quantidade_de_empates) {
            $this->empates = (int) $quantidade_de_empates;
        }
        function getDerrotas() {
            return $this->derrotas;
        }
        function setDerrotas($quantidade_de_derrotas) {
            $this->derrotas = (int) $quantidade_de_derrotas;
        }
        // métodos importantes a serem implementados
        public function apresentar() {
            echo "<p>------------------------------</p>";
            echo "<p>Lutador: ".($this->getNome())."</p>";
            echo "<p>Origem: ".($this->getNacionalidade())."</p>";
            echo "<p>".($this->getIdade())." anos de idade</p>";
            echo "<p>".($this->getAltura())." metro de altura</p>";
            echo "<p>Pesando: ".($this->getPeso())." Kg</p>";
            echo "<p>Ganhou: ".($this->getVitorias())." vez(es)</p>";
            echo "<p>Perdeu: ".($this->getDerrotas())." vez(es)</p>";
            echo "<p>Empatou: ".($this->getEmpates())." vez(es)</p>";
        }
        public function status() {
            echo "<p>".($this->getNome())."</p>";
            echo "<p>É um peso ".($this->getCategoria())."</p>";
            echo "<p>".($this->getVitorias())." vitória(s)</p>";
            echo "<p>".($this->getDerrotas())." derrota(s)</p>";
            echo "<p>".($this->getEmpates())." empate(s)</p>";
        }
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }
    }
?>