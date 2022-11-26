<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	 require "html/head.php";	 
	 ?>

    
        
</head>

	<!--  -->
	<body>
		<?php 
		include "html/header.php"; 
		require_once "src/protect.php";
        
		if(isset($_SESSION['id'])){
			$id = $_SESSION['id'];
		}
		$id = $_SESSION['id'];

		
      
        ?>

		<main>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<a href="edicaoCliente.php?id=<?= $id;?>" style="text-decoration: none;">
				<div class="col">
					<div class="card" >
						<i class="bi bi-person-square text-center text-success" style="font-size: 10rem;"></i>
						<div class="card-body">

							<h5 class="card-title text-center">Dados Pessoais</h5>
							
						</div>
					</div>
				</div>
			</a>	
			<a href="" style="text-decoration: none;">
				<div class="col">
							<div class="card" >
								<i class="bi bi-house text-center" style="font-size: 10rem;"></i>
								<div class="card-body">

									<h5 class="card-title text-center">Endereço</h5>
									
								</div>
							</div>
				</div>
			</a>
			<a href="" style="text-decoration: none;">
				<div class="col">
							<div class="card" >
								<i class="bi bi-telephone text-center" style="font-size: 10rem;"></i>
								<div class="card-body">

									<h5 class="card-title text-center">Contatos</h5>
									
								</div>
							</div>
				</div>	
			<a href="" style="text-decoration: none;">
				<div class="col">
							<div class="card" >
								<i class="bi bi-table text-center" style="font-size: 10rem;"></i>
								<div class="card-body">

									<h5 class="card-title text-center">Contatos</h5>
									
								</div>
							</div>
				</div>	
			</a>
		</div>					
		</main>
<?php
	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

</body>

</html>