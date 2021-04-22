<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função triplo</title>
</head>
<body>
    <?php
        function triplo($numero)
        {
            $x = $numero * 3;
            return $x;
        }

        $valor = 15;
        echo "O triplo de $valor é: ".triplo($valor);
    ?>    
</body>
</html>