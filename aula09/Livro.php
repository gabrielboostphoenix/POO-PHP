<?php
    require_once "Pessoa.php";
    require_once "Publicacao.php";
    class Livro implements Publicacao {
        // Atributos
        private $titulo;
        private $autor;
        private $totalDePaginas;
        private $paginaAtual;
        private $aberto;
        private $leitor;
        // Métodos importantes a serem implementados
        public function detalhes() {
            echo "<p>Livro ".$this->getTitulo()." escrito por ".$this->getAutor();
            echo "<br>Este livro possui um total de ".$this->getTotalDePaginas()." páginas";
            if ($this->getAberto()) {
                echo "<br>O livro está sendo lido na página ".$this->getPaginaAtual();
            }
            echo "<br>Sendo lido por ".$this->getLeitor()->getNome()."</p>";
        }
        // Métodos especias: Getters and Setters and Construct
        public function __construct($titulo, $autor, $totalDePaginas, $leitor) {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotalDePaginas($totalDePaginas);
            $this->setPaginaAtual(0);
            $this->setAberto(false);
            $this->setLeitor($leitor);
        }
        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = (string) $titulo;
        }
        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($autor) {
            $this->autor = (string) $autor;
        }
        public function getTotalDePaginas() {
            return $this->totalDePaginas;
        }
        public function setTotalDePaginas($total_de_paginas) {
            $this->totalDePaginas = (int) $total_de_paginas;
        }
        public function getPaginaAtual() {
            return $this->paginaAtual;
        }
        public function setPaginaAtual($pagina_atual) {
            $this->paginaAtual = (int) $pagina_atual;
        }
        public function getAberto() {
            return $this->aberto;
        }
        public function setAberto($estado_de_abertura) {
            $this->aberto = (bool) $estado_de_abertura;
        }
        public function getLeitor() {
            return $this->leitor;
        }
        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
        // Métodos da Interface
        public function abrir() {
            $this->setAberto(true);
        }
        public function fechar() {
            $this->setAberto(false);
        }
        public function folhear($pagina_a_ser_folheada) {
            if ($this->getAberto()) {
                if ($pagina_a_ser_folheada <= $this->getTotalDePaginas() && $pagina_a_ser_folheada >= 0) {
                    $this->setPaginaAtual($pagina_a_ser_folheada);
                }
            }
        }
        public function avancarPag() {
            if ($this->getAberto()) {
                if ($this->getPaginaAtual() < $this->getTotalDePaginas()) {
                    $this->setPaginaAtual($this->getPaginaAtual() + 1);
                }
            }
        }
        public function voltarPag() {
            if ($this->getAberto()) {
                if ($this->getPaginaAtual() > 0) {
                    $this->setPaginaAtual($this->getPaginaAtual() - 1);
                }
            }
        }
    }
?>