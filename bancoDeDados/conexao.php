<?php 

$hostname = "localhost";
$banco_de_dados = "banco_php";
$usuario = "root";
$senha = "123";


$conexao = new mysqli("localhost", "root", "", "banco_php");
if($conexao ->connect_errno){//erro + number = errno
    echo "Falha ao conectar: (".$conexao->connect_errno.")". $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
}