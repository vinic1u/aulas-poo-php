<?php


class Aeronave
{
    private int $idAeronave;
    private string $empresaRepresentante;
    private float $capacidadePesoToneladas;
    private int $capacidadePessoas;
    private string $status;
    private array $posicaoDosAssentos;
    private array $posicaoDosAssentosVIP;


    public function __construct(string $empresaRepresentante,
    float $capacidadePesoToneladas,int $capacidadePessoas,string $status)
    {
        $this->idAeronave = random_int(1,1000000);
        $this->empresaRepresentante = $empresaRepresentante;
        $this->capacidadePesoToneladas = $capacidadePesoToneladas;
        $this->capacidadePessoas = $capacidadePessoas;
        $this->status = $status;
        $this->posicaoDosAssentos = array();
        $this->posicaoDosAssentosVIP = array();
    }

    # Getters
    public function getEmpresaRepresentante() : string
    {
        return $this->empresaRepresentante;
    }
    public function getCapacidadePesoToneladas() : float
    {
        return $this->capacidadePesoToneladas;
    }
    public function getCapacidadePessoas() : int
    {
        return $this->capacidadePessoas;
    }

    # Setters (Alguns)
    public function setStatus(string $status) : void{
        $this->status = $status;
    }


    # Verificar Disponibilidade da Aeronave
    public function aeronaveEstaDisponivel() : bool
    {
        return $this->status == "DISPONIVEL";
    }
    # Registrar Posicao do Assento NORMAL para a Aeronave
    public function registrarAssentoNormal(string $assentoPosicao)
    {
        array_push($this->posicaoDosAssentos,$assentoPosicao);
    }
    # Registrar Posicao do Assento VIP para a Aeronave
    public function registrarAssentoVIP(string $assentoPosicao)
    {
        array_push($this->posicaoDosAssentosVIP,$assentoPosicao);
    }

}


?>