<?php

class Produto{

    private int $idProduto;
    private string $nome;
    private string $tipo;
    private string $descricao;
    private string $foto;
    private bool $ativo;

    public function __construct(int $idProduto, string $nome, string $tipo, string $descricao, string $foto, bool $ativo)

    {
        $this->idProduto = $idProduto;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->foto = $foto;
        $this->ativo = $ativo;
    }

    public function getIdProduto(): int {
        return $this->idProduto;
    }
    public function setIdProduto(int $idProduto): void{
        $this->idProduto = $idProduto
    }

    public function getNome(): string {
        return $this->nome;
    }
    public function setNome(string $nome): void{
        $this->nome = $nome;
    }

    public function getTipo(): string{
        return $this->tipo;
    }
    public function setTipo(string $tipo): void{
        $this->tipo = $tipo;
    }

    public function getDescricao() : string{
        return $this->descricao;
    }
    public function setDescricao(string $descricao): void{
        $this->descricao = $descricao;
    }

    public function getFoto(): string{
        return $this->foto;
    }
    public function setFoto(string $foto) :void{
        $this->foto = $foto;
    }
 
    public function getAtivo(): bool{
        return $this->ativo;
    }
    public function setAtivo(bool $ativo): void{
        $this->ativo = $ativo;
    }
    

}