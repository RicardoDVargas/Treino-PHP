<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    <h1>Funções Aritméticas</h1>
    <?php 
        $r = abs(1000+5000); //Abs = Absoluto//
        echo "A resposta é $r,";

        $valor = base_convert(254, 10, 8); //base_convert = Converse o valor de uma base aritmética para outra//
        echo " A resposta convertida do número 254, da base Decimal (10) é $valor";

        $v = min(1, 3, 5, 78 , 44, 698, 74852, 0 , 2);//Min = Valor minimo em uma operação.
        echo " O valor minimo da operação é $v";

        $va = max(1, 3, 5, 78 , 44, 698, 74852, 0 , 2);//Max = Valor maximo em uma operação.
        echo " O valor minimo da operação é $va";

        $re = pi(); //Mostra o valor de PI
        echo " O valor de PI é $re";

        $re = M_PI; //Mostra o valor de PI
        echo " O valor de PI é $re";

        $val = pow(10, 50); //Mostra a potencia de uma maneira diferente
        echo " A potencia de 10/50 é $val";

        $valo = sqrt(400);// Calcula a raiz de um valor, também pode ser feito com potencia desta forma (400 ** (1/2))
        echo " A raiz de 400 é $valo";

        $resultado = 400 ** (1/2);
        echo " O resultado é o mesmo $resultado"
    ?>
</body>
</html>