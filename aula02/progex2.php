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
    
    <h2>Formas de pagamento</h2>
    <?php 
    $valor = $_POST["valor"];
    $valor = $_POST["quantidade"];
    $valortotal = ($valor * $quantidade);
    
    echo "Valor total= ".($valor * $quantidade);
    ?>
    <a href="progex1.php"><h3>Voltar</h3></a>
 </div>
</body>
</html>