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
    
    echo "<br>O valor total da compra é: R$ ".$total;
    echo "<br><br>A vista com desconto de 10% = R$ ".$total - ($total * 10/100);
    echo "<br><br>Total no cartão com acréscimo de 15% (até 10x) = R$ ".$total +($total*15/100);
    ?>
    <h3>Parcelas</h3>
    <form>
        <select name="parcela" id="parcela">
            <option value="x1">1x de R$ </option>
            <option value="x2">2x de R$ </option>
            <option value="x3">3x de R$ </option>
            <option value="x4">4x de R$ </option>
            <option value="x5">5x de R$ </option>
            <option value="x6">6x de R$ </option>
            <option value="x7">7x de R$ </option>
            <option value="x8">8x de R$ </option>
            <option value="x9">9x de R$</option>
            <option value="x10">10x de R$</option>
        </select>
    </form>
    <a href="http://localhost/aula02/progex1.php/"><h3>Voltar</h3></a>
 </div>
</body>
</html>