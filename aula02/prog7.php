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
<fieldset>
    <p>Estrutura condicional

    Representa um fluxo alternativo 
    na execução do programa.

    Desvio condicional simples (DCS)
    É quando uma pergunta tem
    somente uma unica resposta.

    Escreva um programa que leia o preço de um
    produto.

    O programa deverá calcular um desconto de 
    10% somente se o preco do produto for maior
    de 100.</p>   
    
    <?php 
    $valor = $_GET["valor"];
    $quantidade = $_GET["quantidade"];

    $desconto = 0;

    if($valor > 100){
        $desconto = ($valor* 10)/100;
    }
    echo "Desconto: R$ " .number_format($desconto, 2, ",", ".");
    echo "<br>Valor com desconto: R$ ". number_format($valor, 2, ",", ".");

    ?>
    <a style="float: right;"href="http://localhost/aula02/prog7r.php/">pagina 2</a>
</fieldset>
 </div>
</body>
</html>