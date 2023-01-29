<?php
    class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
        public function rabiscar() {
            if ($this->tampada == true) {
                echo "<p>Não é possível rabiscar com a caneta pois provavelmente está tampada!</p>";
            } else {
                echo "<p>A caneta está rabiscando...</p>";
            }
        }
        public function tampar() {
            return $this->tampada = true;
        }
        public function destampar() {
            return $this->tampada = false;
        }
    }
?>