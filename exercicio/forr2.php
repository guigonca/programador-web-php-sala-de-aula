<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabuada</title>
    <link rel="stylesheet" href="./css/estilo.css">

</head>
<body>
    <div>
    <?php 
    $n = $_GET["valor"];
    $qtd = 0;

    echo "<h2>Analisando o número $n...</h2>";
    echo "<h2>Valores multiplos:  ";
    for($i = 1; $i <= $n; $i++){
        if($n % $i == 0){
            echo "$i ";
            $qtd++;
        }
    }
    echo "</h2>";
    echo "<h2>Total de múltiplos: $qtd</h2>";
    echo "<h2>Resultado: $n - ".(($qtd>2) ? "não é primo":"é primo") ."</h2>";

    ?>
    <a href="http://localhost/exercicio/for2.php" style="float: right;"><h2>
        Voltar
    </h2></a>
    </div>

    
</body>
</html>