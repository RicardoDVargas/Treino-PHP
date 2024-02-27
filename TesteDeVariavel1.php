<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel e constante</title>
</head>
<body>
    <h1>Exemplo de Variavel e Constante</h1>
    <?php
        //$ = Variavel

        $nome = "Ricardo";
        $sobrenome = "Vargas";

        //A partir de um momento que é adicionado uma nova variavel simples, ela automaticamente puxa o ultimo valor inserido, conforme abaixo

        const PAIS = "Brasil";

        echo "Olá $nome $sobrenome, é um prazer lhe conhecer!";
        echo " Você mora no " .PAIS; echo " ?";
    ?>
</body>
</html>