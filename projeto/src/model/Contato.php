<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php require "html/head.php" ?>

</head>

	<body>
    <h1>Contato</h1>
    
		<?php include "html/header.php" ?>
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


<?php

class Contato{
    private int $idContato;
    private int $idCliente;
    private string $tipo;
    private string $descricao;
    private string $obs;

    public function __construct(int $idContato, int $idCliente, string $tipo, string $descricao, string $obs )
    {
        $this->idContato = $idContato;
        $this->idCliente = $idCliente;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->obs = $obs;
    }

public function getIdContato(): int {
    return $this->idContato;
}
public function setContato(int $contato): void{
    $this->contato = $contato;
}

public function getIdCliente(): int{
    return $this->idCliente;
}
public function setIdCliente(int $idCliente): void{
    $this->idCliente = $idCliente;
}

public function getTipo(): string {
    return $this->tipo;
}
public function setTipo(string $tipo): void{
    $this->tipo = $tipo;
}

public function getDescricao(): string{
    return $this->descricao;
}
public function setDescricao(string $descricao): void{
    $this->descricao = $descricao;
}

public function getObs(): string {
    return $this->obs;
}
public function setObs(string $obs): void{
    $this->obs = $obs;
}
}
?>

