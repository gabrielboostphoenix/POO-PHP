<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Caneta.php";
        $caneta1 = new Caneta("BIC", "Azul", 0.5);
        $caneta2 = new Caneta("Mapped", "Verde", 1.0);
        print_r($caneta1);
        print_r($caneta2);
    ?>
    </pre>
</body>
</html>