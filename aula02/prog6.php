<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senac - Curso de PHP</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<div>
    <p>
    Escreva um programa que leia o nome, a idade e o sexo de uma pessoa.</p>
    <h3>Cadastro de Usuários</h3>
    <form action="prog6r.php" method="post">
            Login<br>
            <input type="text" name="login"><br>
            Senha<br>
            <input type="password" name="senha"><br>
            Perfil<br>
            <select name="perfil" id="">
            <option value="admin">Administrador</option>
            <option value="user">Usuário</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Salvar">     
    </form>
    

</div>
</body>
</html>