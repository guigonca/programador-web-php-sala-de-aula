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
    <p>Escreva um programa que leia
    o preço e a quantidade de produtos comprados.

    O programa deverá calcular um desconto de
    10% no valor total a ser pago se o
    valor do produto for maior que 300.

    O programa deverá calcular um 
    desconto de 7% no valor total 
    a ser pago se o número de produtos
    comprados for maior que 5.

    O programa deverá calcular e imprimir o valor
    total a ser pago com os possíveis descontos.</p>
    
    <form action="http://localhost/aula02/progex10r.php/" method="post">
        Valor: <br>
        <input type="number" name="valor" min="0" required><br>
        <br>
        Quantidade: <br>
        <input type="number" name="quantidade" min="1" required><br>
        <br>
        <input type="submit" value="Enviar" >

    </form>
    <a style="float: right;"href="http://localhost/aula02/progex10r.php/">pagina 2</a>
    </fieldset>
 </div>
</body>
</html>