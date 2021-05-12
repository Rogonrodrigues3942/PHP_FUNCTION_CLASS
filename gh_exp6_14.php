<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private & Public</title>
</head>
<body>
    <?php
        class Classe1
        {
            private $var1 = "Olá, variável 1!\n";
            protected $var2 = "Olá, variável 2!\n";
            protected $var3 = "Olá, variável 3!\n";

            function bomDia(){
                print "Classe 1 :" . $this -> var1."<br>";
                print "Classe 1 :" . $this -> var2."<br>";
                print "Classe 1 :" . $this -> var3."<br>";
            }
        } //Fim da Classe 1

        class Classe2 extends Classe1
        {
            function bomDia(){
            echo "<br><br>";
                Classe1 :: bomDia();
            print "<br><br>";
            print "\nClasse 2 :" . $this -> var1."<br>";
            print "Classe 2 :" . $this -> var2."<br>";
            print "Classe 2 :" . $this -> var3."<br>";
            }
        }

        $obj = new Classe1();
        $obj -> bomDia();

        $obj2 = new Classe2();
        $obj2 -> bomDia();
    ?>
    
</body>
</html>