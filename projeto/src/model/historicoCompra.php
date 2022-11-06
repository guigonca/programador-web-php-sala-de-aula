<?php

class HistoricoCompra{
    private int $idHistorico;
    private int $idCliente;
    private int $idProduto;
    private string $nomeProduto;
    private string $tipo;
    private string $valor;


    public function __construct(int $idHistorico, int $idCliente, int $idProduto, string $nomeProduto, string $tipo, string $valor)
    
    {
        $this->idHistorico = $idHistorico;
        $this->idCliente = $idCliente;
        $this->idProduto = $idProduto;
        $this->nomeProduto = $nomeProduto;
        $this->tipo = $tipo;
        $this->valor = $valor; 

    }

    public function getIdCliente(): int{
        return $this->idCliente;
       }

       public function setIdCliente(int $idCliente): void{
            $this->idCliente = $idCliente;
       }
    
    public function getIdHistorico(): int {
        return $this->idHistorico;
    }
    public function setIdHistorico(int $idHistorico): void{
        $thi->idHistorico = $idHistorico;
    }
    
    public function getIdProduto(): int {
        return $this->idProduto;
    }
    public function setIdProduto(int $idProduto): void{
        $this->idProduto = $idProduto;
    }


    public function getNomeProduto(): string {
        return $this->nomeProduto;
    }
    public function setNomeProduto(string $nomeProduto): void{
        $this->nomeProduto = $nomeProduto;
    }


    public function getTipo(): string {
        return $this->tipo;
    }
    public function setTipo(string $tipo): void{
        $this->tipo = $tipo;
    }


    public function getValor(): string {
        return $this->valor;
    }
    public function setValor(string $valor): void {
        $this->valor = $valor;
    }
    


}