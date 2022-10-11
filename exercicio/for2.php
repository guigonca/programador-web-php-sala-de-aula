<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div>
    <fildset>
        <h2 style="text-align: center">Tabuada</h2>
    </fildset>
    <P>Escreva um número, para verificar se o mesmo é um número Primo.
    <br>Os Números Primos são números naturais maiores do que 1 que
            possuem somente dois divisores, ou seja, são divisíveis por
            1 e por ele mesmo.</P>
    <form action="forr2.php" method="get">
        <Label for="idN" class="form-label">Número</Label>
            <input type="number" class="form-control" name="valor" id="idN" min="1">
        <br>
            <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
    
</body>
</html>