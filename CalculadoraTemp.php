<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_GET['tempo']??0;
    ?>
    <main>
            <h1>Calculadora de Tempo</h1>
        <div>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="tempo">Tempo</label>
                <input type="number" name="tempo" id="tempo" min="0" step="1" value="<?=$total?>" required>
                <input type="submit" value="Aplicar">
            </form>
        </div>
    </main>
    <div>
        <?php
            $sobra = $total;
            // Total de Semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;
            // Total de Dias
            $dia = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;
            // Total de Horas
            $hora = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;
            // Total de Minutos
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            // Total de Segundos
            $segundo = $sobra;
        ?>
    </div>
    <div>
        <section>
            <h2>Resultado</h2>
            <p>O resultado de <?=$total?> é:<br>
            <ul>
                <li>semana:<?=$semana?></li>
                <li>dia:<?=$dia?></li>
                <li>hora:<?=$hora?></li>
                <li>minuto:<?=$minuto?></li>
                <li>segundo:<?=$segundo?></li>
            </ul>

        </section>
    </div>
</body>
</html>