<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - POO</title>
</head>
<body>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";
        // Instanciamento de dois objetos pessoas
        $pessoa[0] = new Pessoa("Pedro", 22, "Masculino");
        $pessoa[1] = new Pessoa("Maria", 31, "Feminino");
        // Instanciamento de dois obejtos livros
        $livro[0] = new Livro("Aprendendo PHP7", "Rasmus Lerdorf", 500, $pessoa[0]);
        $livro[1] = new Livro("Programação Orientada a Objeto com PHP", "Rasmus Lerdorf", 585, $pessoa[0]);
        $livro[2] = new Livro("PHP - Do Básico ao Intermediário", "Ivis Pinha", 800, $pessoa[1]);
        $livro[0]->abrir();
        $livro[0]->folhear(500);
        $livro[0]->detalhes();
        $livro[1]->detalhes();
        $livro[2]->detalhes();
    ?>
</body>
</html>