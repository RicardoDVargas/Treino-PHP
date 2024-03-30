<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $va1 = $_GET['va1']??1;
            $pe1 = $_GET['p1']??1;
            $va2 = $_GET['va2']??1;
            $pe2 = $_GET['p2']??1;
        ?>
        <section>
            <header>
                <h1>Média Aritmética e Ponderada</h1>
            </header>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="Valor1">Valor 1</label>
            <input type="number" name="va1" id="va1" value="<?=$va1?>">
            <label for="Peso1">Peso 1</label>
            <input type="number" name="p1" id="p1" min="1" value="<?=$pe1?>">
            <label for="Valor2">Valor 2</label>
            <input type="number" name="va2" id="v2" value="<?=$va2?>">
            <label for="Peso2">Peso 2</label>
            <input type="number" name="p2" id="p2" min="1" value="<?=$pe2?>">
            <input type="submit" value="Calcular">
        </form>
        </section>
    </main>
    <section>
        <?php 
            $ra = ($va1 + $va2) / 2 ;
            $rp = ($va1*$pe1 + $va2*$pe2) / ($pe1 + $pe2);
        echo "<h2>O Resultado para a Média Aritmética é:</h2>";
        echo "<ul><li><p>A média é <b>". number_format($ra, 2, ",",".")."</b></li></ul>";
        echo "<h2>O Resultado para a Média Ponderada é:</h2>";
        echo "<ul><li><p>A média é <b>". number_format($rp, 2, ",",".")."</b></li></ul>";
        ?>
    </section>
</body>
</html>