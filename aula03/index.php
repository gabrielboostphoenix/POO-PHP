<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Caneta.php";
        // Primeiro Objeto da Classe Caneta
        $caneta1 = new Caneta;
        $caneta1->modelo = "BIC Cristal";
        $caneta1->cor = "Azul";
        // $caneta1->ponta = 0.5;
        // $caneta1->carga = 99;
        # $caneta1->tampada = true;
        $caneta1->rabiscar();
        $caneta1->destampar();
        print_r($caneta1);
    ?>
    </pre>
</body>
</html>