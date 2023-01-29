<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once "Conta_de_banco.php";
            $pessoa1 = new ContaBanco(); // Conta Bancária do Jubileu
            $pessoa2 = new ContaBanco(); # Conta Bancária da Creuza
            $pessoa1->abrirConta('CC');
            $pessoa1->setnumConta(1234);
            $pessoa1->setDono('Jubileu');
            $pessoa2->abrirConta('CP');
            $pessoa2->setnumConta(5678);
            $pessoa2->setDono('Creuza');
            $pessoa1->depositar(300);
            $pessoa2->depositar(500);
            $pessoa2->sacar(100);
            $pessoa1->pagarMensalidade();
            $pessoa2->pagarMensalidade();
            $pessoa1->sacar(338);
            $pessoa2->sacar(550);
            $pessoa1->fecharConta();
            $pessoa2->fecharConta();
            print_r($pessoa1);
            print_r($pessoa2);
        ?>
    </pre>
</body>
</html>