<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>
</head>

	<!--  -->
	<body>
		<?php 
        // include "html/header.php"; 
        require_once "src/conexao.php";
        require_once "clientes.php";

       
        if(!isset($_SESSION)){
            session_start();
        }
    
        $idCliente = isset($_SESSION["idcliente"]) ? $_SESSION["idcliente"] : 0;

        $sql_code = "DELETE * FROM cliente WHERE idcliente = '$idCliente'";
        $sql_query = $conexao->query($sql_code);
        ?>



<?php
	include "html/rodaPe.php";
?>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

</body>

</html>