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
    $x = 1;
    
    do{
        $nx = $n * $x;
        echo "$n x $x = $nx<br>";
        $x++;
    }while($x <= 10);
    ?>
    <a href="http://localhost/exercicio/dowhile3.php" style="float: right;"><h2>
        Voltar
    </h2></a>
    </div>

    
</body>
</html>