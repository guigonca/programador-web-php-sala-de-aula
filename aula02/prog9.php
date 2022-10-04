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
        
<fieldset>
    <?php 
    $numero = $_GET["n"];
    // $resto = $numero % 2;

    /*Desvio condicional composto*/
    
    if($numero >0){
        echo "<h1 style='text-align: center'> Positivo</h2>";
    }if($numero <0){
        echo "<h1 style='text-align: center'>Negativo</h1>";
    }else if($numero == 0){
        echo "<h1 style='text-align: center'> Neutro</h1>";
    }
    

    ?>
    <a style="float: right;"href="http://localhost/aula02/prog9r.php/">pagina 2</a>
</fieldset>
 </div>
</body>
</html>