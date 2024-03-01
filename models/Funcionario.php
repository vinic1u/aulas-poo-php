<?php

class Funcionario{
    
    private int $idFuncionario;
    private string $nome;
    private string $passaporte;
    private string $cargo;
    private string $tipoDeDocumentoIdentificacao;
    private string $documentoCodigo;
    private string $status;


    public function __construct(string $nome,string $passaporte,string $cargo,
    string $tipoDeDocumentoIdentificacao,string $documentoCodigo,string $status)
    {
        $this->idFuncionario = random_int(1,1000000);
        $this->nome= $nome;
        $this->passaporte = $passaporte;
        $this->cargo = $cargo;
        $this->tipoDeDocumentoIdentificacao = $tipoDeDocumentoIdentificacao;
        $this->documentoCodigo = $documentoCodigo;
        $this->status = $status;
    }
    # Getters
    public function getNome() : string
    {
        return $this->nome;
    }
    public function getPassaporte() : string
    {
        return $this->passaporte;
    }
    public function getCargo() : string
    {
        return $this->cargo;
    }
    public function getTipoDeDocumentoIdentificacao() : string
    {
        return $this->tipoDeDocumentoIdentificacao;
    }
    public function getDocumentoCodigo() : string
    {
        return $this->documentoCodigo;
    }
    public function getStatus() : string
    {
        return $this->status;
    }
    
    # Setters
    public function setNome(string $novoNome) : void
    {
        $this->nome = $novoNome;
    }

    public function setPassaporte(string $novoPassaporte) : void
    {
        $this->passaporte = $novoPassaporte;
    }

    public function setCargo(string $novoCargo) : void
    {
        $this->cargo = $novoCargo;
    }

    public function setTipoDeDocumentoIdentificacao(string $novoTipoDeDocumentoIdentificacao) : void
    {
        $this->tipoDeDocumentoIdentificacao = $novoTipoDeDocumentoIdentificacao;
    }

    public function setDocumentoCodigo(string $novoDocumentoCodigo) : void
    {
        $this->documentoCodigo = $novoDocumentoCodigo;
    }

    public function setStatus(string $status) : void
    {
        $this->status = $status;
    }

    # Verificar se o funcionario esta Disponivel para ser Alocado para Voo
    public function funcionarioDisponivel() : bool
    {
        return $this->status == "DISPONIVEL";
    }
}

?>
