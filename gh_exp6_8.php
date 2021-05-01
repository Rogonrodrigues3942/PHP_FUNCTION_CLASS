<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de valor, passagem por referência</title>
</head>
<body>
    <?php
        function dobro($valor)
        {
            $valor = 2 * $valor;
        }

        function duplica(&$valor)
        {
            $valor = 2 * $valor;
        }

        $valor = 5;
        dobro($valor);
        echo $valor ."<br>";

        duplica($valor);
        echo $valor;
    ?>
    
</body>
</html>