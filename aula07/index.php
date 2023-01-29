<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - POO</title>
</head>
<body>
    <?php
        require_once "Lutador.php";
        require_once "Luta.php";
        $vetor = array(5);
        $vetor[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $vetor[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $vetor[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $vetor[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $vetor[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $vetor[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
        $uec01 = new Luta();
        $uec01->marcarLuta($vetor[4], $vetor[5]);
        $uec01->lutar();
    ?>
</body>
</html>