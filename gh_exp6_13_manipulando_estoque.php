<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de criação de objeto a partir de uma classe. Páginas 88 e 88 </title>
</head>
<body>
    <?php
        class Loja
        {
            var $itens; // criando váriavel para se transformada em vetor.

            function adiciona ($codigo, $quantidade)
            {
                if(isset ( $this -> itens[$codigo] ))   /*Verifica se itens existe; caso não exista, criará a variável*/
                    $this -> itens[$codigo] += $quantidade;
                else
                    $this -> itens[$codigo] = $quantidade;
            }

            function remove ($codigo, $quantidade)
            {
                if ($this -> itens[$codigo] >= $quantidade )
                {
                    $this -> itens[$codigo] -= $quantidade; 
                    return true;
                }
                else
                {
                    echo "\nQuantidade de unidades da venda, maior que a de estoque.\n";
                    return false;
                }
            }
        }

        $estoque = new Loja;    //Criando objeto estoque 

        $estoque -> adiciona("Bermuda", 4);
        $estoque -> adiciona("Camiseta", 3);

        echo "A loja já possui ".$estoque -> itens["Bermuda"]. " bermudas.<br>";
        echo "A loja já possui ".$estoque -> itens["Camiseta"]. " camiseta.<br>";

        //Removendo mercadorias.
        $estoque -> remove("Bermuda",3);
        echo "A loja já possui ".$estoque -> itens["Bermuda"]. " bermudas.<br>";
        $estoque -> remove("Bermuda",1);
        echo "A loja já possui ".$estoque -> itens["Bermuda"]. " bermudas.<br>";

        $estoque -> remove("Bermuda",1);
        echo "A loja já possui ".$estoque -> itens["Bermuda"]. " bermudas.<br>";

    ?>
    
</body>
</html>