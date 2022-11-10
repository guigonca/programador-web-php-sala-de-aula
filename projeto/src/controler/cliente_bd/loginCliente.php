<?php
    require_once "../../conexao.php";

    if(isset($_POST["email"]) || isset($_POST["senha"])){
            $email = $conexao->real_escape_string($_POST["email"]);
            $senha = $conexao->real_escape_string($_POST["senha"]);

            $sql_code = "select * from cliente where email = '$email'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: ". $conexao->error);

            //Quantidade de linhas retornado;
            $qtd = $sql_query->num_rows;  //Atritubo num rows = numero de linhas

            if($qtd ==1){
                $cliente = $sql_query->fetch_assoc();

                if(passaword_verify($senha, $cliente['senha'])){

                    if(!isset($_SESSION)){
                        session_start();
                    }

                    $_SESSION['id']= $cliente['idcliente'];
                    $_SESSION['nome']= $cliente['nome'];

                    header ("Location: ../../../index.php");
                    
                }else {
                    // header ("Location: ../../../nao_permitido.php");
                    echo "Falha ao logar! E-mail ou senha incorretos";

                }

            }else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }   
            
        }
    
?>