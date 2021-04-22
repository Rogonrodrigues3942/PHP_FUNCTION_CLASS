<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create function</title>
</head>
<body>
    <?php
        function soma_valores($valor1, $valor2, $valor3)
        {
            $soma = $valor1 + $valor2 + $valor3;
            echo "A soma dos valores $valor1, $valor2 e $valor3: ";
            print $soma;
        }

        $n1 = 10;
        $n2 = 20;
        $n3 = 30;

        soma_valores($n1, $n2, $n3);
    ?>
    
</body>
</html>