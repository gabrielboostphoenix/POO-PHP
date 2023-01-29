<?php
    require_once "Livro.php";
    interface Publicacao {
        public function abrir();
        public function fechar();
        public function folhear($pagina_a_ser_folheada);
        public function avancarPag();
        public function voltarPag();
    }
?>