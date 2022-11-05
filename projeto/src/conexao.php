<?php 

$hostname = "localhost";
$banco_de_dados = "projeto";
$usuario = "root";
$senha = "";


$conexao = new mysqli($localhost, $usuario, $senha, $banco_de_dados);
if($conexao ->connect_errno){//erro + number = errno
    echo "Falha ao conectar: (".$conexao->connect_errno.")". $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
}