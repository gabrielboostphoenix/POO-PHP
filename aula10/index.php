<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - POO</title>
</head>
<body>
    <?php
        # Importações
        require_once "Pessoa.php";
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Funcionario.php";
        // Instanciamento
        $pessoa1 = new Pessoa;
        $pessoa2 = new Aluno;
        $pessoa3 = new Professor;
        $pessoa4 = new Funcionario;
        // Usando os métodos especiais
        $pessoa1->setNome("Pedro");
        $pessoa2->setNome("Maria");
        $pessoa3->setNome("Cláudio");
        $pessoa4->setNome("Fabiana");
        $pessoa2->setCurso("Informática");
        $pessoa3->setSalario(2500.75);
        $pessoa4->setSetor("Estoque");
    ?>
    <pre>
        <?php
            print_r($pessoa1);
            print_r($pessoa2);
            print_r($pessoa3);
            print_r($pessoa4);
        ?>
    </pre>
</body>
</html>