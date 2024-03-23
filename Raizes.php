<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header><h1>Descobrindo a Raiz</h1></header>
        <?php 
            $raiz = $_GET['Raiz']??1;
        ?>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="GET">
                <label for="valor">Raiz</label>
                <input type="number" name="Raiz" id="Raiz" value="<?=$raiz?>">
                <input type="submit" value="Descobrir">
            </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $Resul = sqrt($raiz)??1;
            $Cubic = $raiz **(1/3)??1;
            echo "<p>A raiz² de $raiz é <b>".number_format($Resul, 2, "," , ".")."</b>.</p>";
            echo "<p>A raiz³ de $raiz é <b>".number_format($Cubic, 2, "," , ".")."</b>.</p>";
        ?>
    </section>
</body>
</html>