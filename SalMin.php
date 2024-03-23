<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>Calculo</h1>
        </header>
        <?php 
            $minimo = 1_412;
            $salario = $_GET['sal'] ?? 0;

        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário minimo de <b>R$<?=number_format($minimo,2,",", ".")?></b></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $total = intdiv($salario, $minimo);
            $dif = $salario % $minimo;
        echo "Quem recebe um salário de R\$". number_format($salario, 2, "," , ".") ." ganha <b>$total salários minimos</b> + R\$". number_format($dif, 2, "," , ".") ."";
        ?>
    </section>
</body>
</html>