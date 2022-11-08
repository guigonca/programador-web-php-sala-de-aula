<?php
 if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    header("location: nao_permitido.php");
    
}