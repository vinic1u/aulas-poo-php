<?php

class Passageiro
{
    private int $idPassageiro;
    private string $nome;
    private string $passaporte;
    private string $email;
    private string $telefone;

    public function __construct(int $idPassageiro,string $nome,
    string $passaporte,string $email,string $telefone) {
        
        $this->idPassageiro = $idPassageiro;
        $this->nome = $nome;
        $this->passaporte = $passaporte;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    # Getters
    public function getNome() : string
    {
        return $this->nome;
    }
    public function getPassaporte() : string
    {
        return  $this->passaporte;
    }
    public function getEmail() : string
    {
        return $this->email;
    }
    public function getTelefone() : string
    {
        return $this->telefone;
    }

   
    

    


}





?>
