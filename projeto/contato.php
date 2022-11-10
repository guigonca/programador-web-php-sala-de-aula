<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>

</head>

	<!--  -->
	<body>
		<?php include "html/header.php"; 
		require_once "src/conexao.php";
		$lista = [];
        $sql_code = "SELECT * FROM contato";
        $sql_query = $conexao->query($sql_code);
        
        if($sql_query->num_rows > 0){
            $lista = $sql_query->fetch_all(MYSQLI_ASSOC);
            // var_dump($lista);
        }
		?>
		<main>
            <h1>Contatos</h1>			
            <h3>Lista de contatos</h3>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>                    
                    <th>TIPO</th>
                    <th>DESCRIÇÃO</th>
                    <th>OBS</th>
                </tr>
                <?php foreach($lista as $cliente) : ?>
                <tr>
                    <td><?=$contato["idcliente"]; ?></td>
                    <td><?=$contato["tipo"]; ?></td>
                    <td><?=$contato["descricao"]; ?></td>
                    <td><?=$contato["obs"]; ?></td>
                   
                    <td>
                        <a href="edicaoCliente.php?id=<?=$cliente['idcliente']; ?>">[EDITAR]</a>
                        <a href="excluirCliente.php?id=<?=$cliente['idcliente']; ?>">[EXCLUIR]</a>
                    </td>
                   <?php endforeach ?> 
                </tr>
            </table>
		</main>
<?php
	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

</body>

</html>