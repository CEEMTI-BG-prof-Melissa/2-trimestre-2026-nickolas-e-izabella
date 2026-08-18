<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Operadores </title>
    </head>
    <body>
        <?php
            
            $preco: 120;
            $quantidade: 3;
            $desconto: 30;
            $parcela: 2;

            echo "Valor total: " .($preco * $quantidade);
            echo "Valor com desconto: " .(360 - $desconto);
            echo "Valor com 2 parcelas de: " .(330 / $parcela);
            echo "Valor com possível taxa: " .(330 + 15);
            echo "Resto da divisão do valor final: " .(330 % 2);
        ?>
    </body>
    
</html>
