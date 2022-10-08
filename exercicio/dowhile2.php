<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senac - Curso PHP - Laço de repetição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <p style="text-align: center;">Escreva um programa que imprima o fatorial de um número e mostre o valor da operação aritimética</p>
        <form action="dowhile2.php" method="get">
            <label for="idn" class="form-label">Numero</label>
            <input type="number">
        </form>
        <?php 
        $n = $_GET["valor"];
        $total = 1;
        echo "<h3> $n! = ";
        do{
            echo " x $n";
            $total = $total * $n;
            $n--;
        }while ($n2 >= 1);
        echo "=". $total . "</h3>"
                  
            
        
        ?>




    <a href="http://localhost/exercicio/dowhile.php"><i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i></a>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>