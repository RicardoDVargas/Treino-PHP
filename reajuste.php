<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de valor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco']??0;
        $aplicado = $_REQUEST['percentual']??0;
    ?>
    <main>
            <h1>Reajuste de Salárial</h1>
        <div>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="reajuste">Salário</label>
                <input type="number" name="preco" id="preco" value="<?=$preco?>" min="0" step="0.01">
                <label for="percentual">Qual será o percentual aplicado? (<b><span id="alt">?</span>%</b>)</label>
                <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" oninput="mudaValor()" <?=$aplicado?>>
                <input type="submit" value="Aplicar">
            </form>
        </div>
    </main>
    <div>
        <?php 
            $reajustado = $preco * $aplicado / 100;
            $novo = $preco + $reajustado;
        ?>
    </div>
    <div>
        <section>
            <h2>Resultado</h2>
            <p>O salário que era <b>R$<?=number_format($preco,2,",",".")?></b> será <b>R$<?=number_format($novo,2,",",".")?></b> com <b><?=$aplicado?>%</b> de reajuste.</b></p>
        </section>
    </div>
    <script>
        //Declarações Automaticas
        mudaValor ()

        function mudaValor() {
           alt.innerText = percentual.value;
        }
    </script>
</body>
</html>