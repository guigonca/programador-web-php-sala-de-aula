<?php 

class Endereco{

    private int $id;
    private int $idCliente;
    private string $tipo;
    private string $logradouro;
    private string $numero;
    private string $complemento;
    private string $bairro;
    private string $municipio;
    private string $cidade;
    private string $cep;

    public function __construct(int $id, int $idCliente, string $tipo, string $logradouro, string $numero, string $complemento, string $bairro, string $municipio, string $cidade, string $cep)
    {
        $this->id = $id;
        $this->idCliente = $idCliente;
        $this->tipo = $tipo;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro= $bairro;
        $this->municipio = $municipio;
        $this->cidade = $cidade;
        $this->cep = $cep;
    }

    public function getIdCliente(): int{
        return $this->idCliente;
       }

       public function setIdCliente(int $idCliente): void{
            $this->idCliente = $idCliente;
       }
    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id): void{
        $this->id = $id;
    }


    public function getTipo(): string {
        return $this->tipo;
    }
    public function setTipo(string $tipo):void{
        $this->tipo = $tipo;
    }

    public function getLogradouro(): string {
        return $this->logradouro;
    }
    public function setLogradouro(string $logradouro): void{
        $this->logradouro = $logradouro;
    }

    public function getNumero(): string {
        return $this->numero;
    }
    public function setNumero(string $numero): void{
        $this->numero = $numero;
    }


    public function getComplemento(): string {
        return $this->complemento;
    }
    public function setComplemento(string $complemento): void{
        $this->complemento = $complemento; 
    }


    public function getBairro(): string{
        return $this->bairro;
    }
    public function setBairro(string $bairoo): void {
        $this-> bairro = $bairro;
    }


    public function getMunicipio(): string {
        return $this->municipio;
    }
    public function setMunicipio(string $municipio): void{
        $this->municipio = $municipio;
    }


    public function getCidade(): string {
        return $this->cidade;
    }
    public function setCidade(string $cidade): void{
        $this->cidade= $cidade;
    }


    public function getCep(): string {
        return $this->cep;
    }
    public function setCep(string $cep): void{
        $this->cep = $cep;
    }
}