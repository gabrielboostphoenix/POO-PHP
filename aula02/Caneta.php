<?php
    class Caneta {
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
        function rabiscar() {
            if ($this->tampada == true) {
                echo "<p>Não é possível rabiscar com a caneta pois provavelmente está tampada!</p>";
            } else {
                echo "<p>A caneta está rabiscando...</p>";
            }
        }
        function tampar() {
            return $this->tampada = true;
        }
        function destampar() {
            return $this->tampada = false;
        }
    }
?>