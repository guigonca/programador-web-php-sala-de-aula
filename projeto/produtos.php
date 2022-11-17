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

		$sql_code = "SELECT * FROM produtos";
		$sql_query = $conexao->query($sql_code);
		?>
		<main>
			<h1>Produtos</h1>
			<h3>Lista cadastrados</h3>
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>FOTO</th>
					<th>NOME</th>
					<th>TIPO</th>
					<th>CATEGORIA</th>
					<th>FABRICANTE</th>
					<th>ATIVO</th>
					<th>AÇÃO</th>
				</tr>
				<?php 
				while($produto = $sql_query->fetch_assoc()){
				?>
				<tr>
					<td><?= $produto['idproduto']?></td>
					<td><img height="50" src="<?= $produto['foto']?>"></td>
					<td><?= $produto['nome']?></td>
					<td><?= $produto['tipo']?></td>
					<td><?= $produto['categoria']?></td>
					<td><?= $produto['fabricante']?></td>
					<td><?= $produto['ativo']?></td>
					<td>
					<a href="estoque.php?id=<?=$produto['idproduto']; ?>">[ESTOQUE]</a>
                        <a href="mais_detalhes?id=<?=$produto['idproduto']; ?>">[DETALHES]</a>
					</td>
				</tr>
				<?php
				}
				?>
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