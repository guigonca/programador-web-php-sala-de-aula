<?php

class Estoque{

    private int $idEstoque;
    private int $idProduto;
    private string $registro;
    private string $data;
    private string $valor;
   

    public function __construct(int $idEstoque, int $idProduto, string $registro, string $data, string $valor)

    {
        $this->idEstoque = $idEstoque;
        $this->idProduto = $idProduto;
        $this->registro = $registro;
        $this->data = $data;
        $this->valor = $valor;        
    }

    public function getIdEstoque(): int {
        return $this->idEstoque;
    }
    public function setIdEstoque(int $idEstoque): void {
        $this->idEstoque = $idEstoque;
    }


    public function getIdProduto(): int {
        return $this->idProduto;
    }
    public function setIdProduto(int $idProduto): void {
        $this->idProduto = $idProduto;
    }


    public function getRegistro(): string {
        return $this->registro;
    }
    public function setRegistro(string $registro): void {
        $this->registro = $registro;
    }


    public function getData(): string {
        return $this->data;
    }
    public function setData(string $data): void {
        $this->data = $data;
    }


    public function getValor(): string {
        return $this->valor;
    }
    public function setValor(string $valor): void {
        $this->valor = $valor;
    }


}