<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>

	<link rel="stylesheet" href="orbit-1.2.3/orbit-1.2.3.css" type="text/css" />
    <script src="orbit-1.2.3/jquery-1.5.1.min.js" type="text/javascript"></script>
	<script src="orbit-1.2.3/jquery.orbit-1.2.3.js" type="text/javascript"></script>
    
    <script type="text/javascript">
     $(window).load(function() {
         $('#banner').orbit();
     });
	</script>
</head>

	<!--  -->
	<body>

		<?php include "html/header.php" ?>

		<div id="banner">
	 		<img src="img/banner/banner1.png" alt="banner do site">
	 		<img src="img/banner/banner2.png" alt="banner do site">
	 		<img src="img/banner/banner3.png" alt="banner do site">
		</div>

		<main>

		</main>
<?php
	include "html/rodaPe.php";
?>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

</body>

</html>