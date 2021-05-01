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
        function dobrando($valor)
        {
            $valor = 2 * $valor;
            print "Dobrando na função <br>";
        }

        function duplicando(&$valor)
        {
            $valor = 2 * $valor;
           
        }

        $valor = 5;
        dobrando($valor);
        print $valor."<br>";
        duplicando($valor);
        print "Dobrando a o valor fora da função. <br>";
        print $valor;
    ?>
    
</body>
</html>