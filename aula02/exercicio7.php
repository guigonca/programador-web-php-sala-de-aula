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
    <?php 
    $a = $_GET["n1"];
    $b = $_GET["n2"];
    $c = $_GET["n3"];


    /*Desvio condicional composto*/
    
    if($a > $b && $a> $c){
        echo "<h1 style='text-align: center'> O primeiro é o maior</h1>";
    } else if($b > $a && $b > $c){
        echo "<h1 style='text-align: center'> O segundo é o maior</h1>";       
    }else {
        echo "<h1 style='text-align: center'> O terceiro é o maior</h1>";      
        
    }

    ?>
    <!-- <a style="float: right;"href="http://localhost/aula02/exercicio6r.php/">pagina 2</a> -->
    <form action="http://localhost/aula02/exercicio7r.php/">
    <input type="submit" value="Voltar">
    </form>
</fieldset>
 </div>
</body>
</html>