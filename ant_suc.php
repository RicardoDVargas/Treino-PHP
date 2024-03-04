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
        <h1></h1>
    </header>
    <main>
        <?php 
            $antecessor = $_POST ["numero"] -1;
            $numero = $_POST ["numero"];
            $sucessor = $_POST ["numero"] +1;
            echo "<h1>O Resultado Final é</h1>";
            echo "<p>O número que você selecionou foi <b>$numero</b>!";
            echo "<p>O antecessor do número é <b>$antecessor</b>!";
            echo "<p>O sucessor do número é <b>$sucessor</b>!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a pagina inicial</a></p>
    </main>
</body>
</html>