<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>

</head>

	<!--  -->
	<body>

		<?php 
		include "html/header.php"; 
		require_once "src/conexao.php";

		$lista = [];
		$sql_code = "SELECT * FROM cliente ";
		$sql_query = $conexao->query($sql_code);	
		
		if($sql_query->num_rows > 0){
			$lista = $sql_query->fatch_all(MYSQLI_ASSOC);
			// var_dump($lista);
		}
		?>

		<main>
			<h1>Clientes</h1>


			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>NASCIMENTO</th>
					<th>ORGÃO</th>
					<th>IDENTIDADE</th>
					<th>CPF</th>
					<th>ESTADO CIVIL</th>
					<th>SEXO</th>
					<th>ATIVO</th>
					<th>AÇÃO</th>
					
				</tr>

				<?php foreach($lista as $cliente) ?>

				<tr>
					<td><?=$cliente["idcliente"];?></td>
					<td><?$nome?></td>
					<td><?  ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
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