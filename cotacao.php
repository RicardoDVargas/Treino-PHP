<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
        <h1>Conversão</h1>
        </header>
        <?php 
            //Maneira Simples//
            //Cotação Atual//
            $cotação = 5.38;

            //Quanto tem//
            $real = $_REQUEST ["dinheiro"] ?? 0;

            //O valor convertido é//
            $dólar= $real / $cotação;
            //Mostrar o resultado//
            //echo "O valor que você tem R\$ ". number_format($real, 2, ',' , '.') ." , é equivalente a US\$". number_format($dólar, 2, ',' , '.')."";//
            //Number_Format é para formatar um número de maneira tradicional (Mais simples)//
            //Biblioteca intl (Internallization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>O valor que você tem <b>".numfmt_format_currency($padrão,$real,"BRL")."</b>, equivale a <b>". numfmt_format_currency ($padrão, $dólar, "EUA")."</b></p>";
        ?>
        <button onclick="javascript:history.go (-1)">Voltar</button>
    </main>
</body>
</html>