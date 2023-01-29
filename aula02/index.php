<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php
        require_once "Caneta.php";
        // Primeiro Objeto da Classe Caneta
        $caneta1 = new Caneta;
        $caneta1->cor = "Azul";
        $caneta1->ponta = 0.5;
        $caneta1->tampada = false;
        $caneta1->tampar();
        print_r($caneta1);
        echo "<br>";
        # Segundo Objeto da Classe Caneta
        $caneta2 = new Caneta;
        $caneta2->cor = "Verde";
        $caneta2->carga = 50;
        $caneta2->tampar();
        print_r($caneta2);
    ?>
</body>
</html>