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
    $numero = $_GET["n"];


    /*Desvio condicional composto*/
    
    if($numero > 0){
        echo "<h2 style='text-align: center'>Positivo</h2>";
        if($numero >10){
            echo "<h2 style='text-align: center'>Válido</h2>";
        }
    }else{
        echo "<h2 style='text-align: center'>Negativo</h2>";
    }
    

    ?>
    <!-- <a style="float: right;"href="http://localhost/aula02/exercicio6r.php/">pagina 2</a> -->
    <form action="http://localhost/aula02/exercicio6r.php/">
    <input type="submit" value="Voltar">
    </form>
</fieldset>
 </div>
</body>
</html>