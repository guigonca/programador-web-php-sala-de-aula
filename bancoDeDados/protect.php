<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    header("Location: nao_permitido.php");
    die("Você não pode acessar essa página sem esta logado!
    <br>
    <a href=\"index.php\" class=\"btn btn-link\">
        <i class=\"bi bi-reply\" style=\"font-size: 2rem;\">Voltar</i>
    </a>");
}
