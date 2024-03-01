<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_REQUEST); //$_GET $_POST $_COOKIES
            $nome = $_GET ["nome"] ?? "Desconhecido" ; //O nome dentro do [] é o nome dentro do HTML// ?? Operar null coalesense // existe a partir do PHP 7+
            $sobrenome = $_GET ["sobrenome"] ?? "??"; //O sobrenome dentro do [] é o nome dentro do HTML
            echo "<p>É um prazer lhe conhecer, <b>$nome $sobrenome</b>! Este é o meu site!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a pagina do formulário</a></p>
    </main>
</body>
</html>