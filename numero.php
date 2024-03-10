<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisar de Número Real</h1>
        <?php 
            $numero = $_POST["num"] ?? 0;
            
            echo "<p>Analisando o número <b>". number_format($numero, 3, ",", ".") ."</b> informado pelo usúario: </p>";

            $int = (int) $numero;
            $frac = $numero - $int;

            echo "<ul><li> A parte inteira do número é: <b>". number_format($int, 0, ",", ".") ."</b>";
            echo "<li> A parte fracionada do número é: <b>". number_format($frac, 2, ",", ".") ."</b></ul>"
        ?>
        <button onclick="javascript:history.go (-1)">Voltar</button>
    </main>
</body>
</html>