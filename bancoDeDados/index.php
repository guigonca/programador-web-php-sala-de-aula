<!DOCTYPE html>
<?php
    require_once "conexao.php";

    if(isset($_POST["email"]) || isset($_POST["senha"])){
        if(strlen($_POST["email"]) ==0){
            echo "Preencha o seu e-mail!";
        }else if(strlen($_POST["senha"])==0){
            echo "preencha sua senha!";
        }else {
            //real_escap_string()= função que retorna um string sem caracatere especiais...

            $email = $conexao->real_escape_string($_POST["email"]);
            $senha = $conexao->real_escape_string($_POST["senha"]);

            $sql_code = "select * from usuario where login = '$email' and senha = '$senha' ";

            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: ". $conexao->error);

            //Quantidade de linhas retornado;
            $qtd = $sql_query->num_rows;  //Atritubo num rows = numero de linhas

            if($qtd ==1){
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }
                // $_SESSION['user'] = $usuario;
                $_SESSION['id'] = $usuario["id"];
                $_SESSION['nome'] = $usuario["nome"];

                //redirecionando para a página
                header("Location: login.php");
            }else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }   
            
        }
    }
?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>

</head>

<body>
    <div>

        <h3 style="text-align: center;">
            Login
        </h3>
        <hr>
        <section id="resposta" class="alert alert-danger" role="alert" style ="display: none;">

        </section>

        <form action="" method="post">
            <br>
            <label  class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control">

            <label  class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control">
            <br>
            <input type="Submit" value="Login" class="btn btn-primary">

        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>