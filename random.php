<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <?php 
            $numero = rand(0, 1000);
            echo "<h1>Gerar número aleatóriamente</h1>";
            echo "<p>Tente gerar um número aleatório entre <b>0</b> à <b>1000</b></p>";
            echo "<p> o Resultado gerado foi <b>$numero</b></p>";
        ?>
        <input type="button" value="Gerar Outro" onclick="window.location.reload(true)">
    </main>
</body>
</html>