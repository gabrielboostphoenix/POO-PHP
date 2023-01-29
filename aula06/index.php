<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - POO</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <?php
        require_once "ControleRemoto.php";
        $controle_remoto_1 = new ControleRemoto;
        $controle_remoto_1->ligar();
        $controle_remoto_1->maisVolume();
        $controle_remoto_1->abrirMenu();
    ?>
</body>
</html>