<?php

class Contato{
    private int $idContato
    private int $idCliente
    private string $tipo
    private string $descricao
    private string $obs

    public function __construct(int $idContato, int $idCliente, string $tipo, string $descricao, string $obs )
    {
        $this->idContato = $idContato;
        $this->idCliente = $idCliente;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->obs = $obs;
    }

    //O id contato e o id cliente precisa colocar mais alguma especificação, porém não consegui lembrar o que ela faz para adicionar.
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