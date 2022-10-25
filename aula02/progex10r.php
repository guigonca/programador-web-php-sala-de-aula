<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preços</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<div>
    <?php 
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];
    $total = $valor*$quantidade;
    $desconto1 = 0;
    $desconto2 = 0;

    
    
    if($valor > 300){
        echo "Esse produto é acima de R$ 300,00 por isso você ganhou um desconto de 10%, ficando em: R$ " .$valor - ($valor*10/100);
    }if($quantidade > 5){
            echo "Com mais de 5 produtos você ganhou um desconto de 7%! Ficando no total = R$ ".$total - ($total*7/100);
            
    }
    ?>
    
    <
    <a href="http://localhost/aula02/progex10.php/"><h3>Voltar</h3></a>
 </div>
</body>
</html>