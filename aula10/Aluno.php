<?php
    require_once "Pessoa.php";
    class Aluno extends Pessoa {
        // Atributos
        private $matricula;
        private $curso;
        // Métodos importantes a serem implementados
        public function cancelarMatricula() {
            echo "<p>Matrícula será cancelada!</p>";
            $this->setMatricula(null);
            $this->setCurso(null);
        }
        // Métodos importantes: Getters and Setters
        public function getMatricula() {
            return $this->matricula;
        }
        public function setMatricula($matricula) {
            $this->matricula = (int) $matricula;
        }
        public function getCurso() {
            return $this->curso;
        }
        public function setCurso($curso) {
            $this->curso = (string) $curso;
        }
    }
?>