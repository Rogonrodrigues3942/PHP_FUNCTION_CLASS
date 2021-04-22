<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retorno de array</title>
</head>
<body>
    <?php
        function clubes()
        {
            $clubes[] = "Grêmio";
            $clubes[] = "Palmeiras";
            $clubes[] = "Flamengo";
            $clubes[] = "Atlético Mineiro";
            $clubes[] = "Bahia";

            return $clubes;
        }
        //Início do programa principal
        $times = clubes();  //Armazenando a function clubes () na variável $times
        for($i = 0; $i < sizeof($times); $i++)
        {
            print "\$times[$i] vale = $times[$i].<br>";
        }
    ?>
    
</body>
</html>