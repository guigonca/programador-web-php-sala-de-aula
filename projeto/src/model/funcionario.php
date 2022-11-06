<?php

class Funcionario{

    private int $idFuncionario;
    private string $nome;
    private string $cpf;
    private string $estadoCivil;
    private string $sexo;
    private string $tipo;
    private string $celular;
    private string $email;
    private string $senha;
    private bool $ativo;

    public function __construct(int $idFuncionario, string $nome, string $cpf, string $estadoCivil, string $sexo, string $tipo, string $celular, string $email, string $senha, bool $ativo)

    $this->idFuncionario = $idFuncionario;
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->estadoCivil = $estadoCivil;
    $this->sexo = $sexo;
    $this->tipo = $tipo;
    $this->celular = $celular;
    $this->email = $email;
    $this->senha = $senha;
    $this->ativo = $ativo;
    
    
    public function getIdFuncionario(): int {
        return $this->getIdFuncionario;
    }
    public function setIdFuncionario(int $idFuncionario): void{
        $this->idFuncionario = $idFuncionario;
    }

    public function getNome(): string{
        return $this->nome;
    }
    public function setNome(string $nome): void{
        $this->nome = $nome;
    }

    public function getCpf(): string {
        return $this->cpf;
    }
    public function setcpf(string $cpf): void{
        $this->cpf = $cpf;
    }

    public function getEstadoCivil() : string {
        return $this->estadoCivil;
    }
    public function setEstadoCivil(string $estadoCivil): void{
        $this->estadoCivil = $estadoCivil;
    }


    public function getSexo(): string {
        return $this->sexo;
    }
    public function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }


    public function getTipo(): string {
        return $this->tipo;
    }
    public function setTipo(string $tipo): void{
        $this->tipo = $tipo;
    }


    public function getCelular(): string {
        return $this->celular;
    }
    public function setCelular(string $celular): void{
        $this->celular= $celular;
    }


    public function getEmail() : string {
        return $this->email;
    }
    public function setEmail(string $email): void{
        $this->email = $email;
    }


    public function getSenha(): string {
        return $this->senha;
    }
    public function setSenha(string $senha): void{
        $this->senha = $senha; 
    }


    public function getAtivo() : bool {
        return $this->ativo;
    }
    public function setAtivo(bool $ativo): void{
        $this->ativo = $ativo;
    }



}
