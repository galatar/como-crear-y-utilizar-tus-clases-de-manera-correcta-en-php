<?php


class Cliente
{
    /** @var int */
    private $id;

    /** @var string */
    private $razonSocial;

    /** @var string */
    private $identificadorFiscal;

    /** @var string */
    private $direccion;

    /** @var string */
    private $localidad;

    /** @var string */
    private $provincia;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRazonSocial(): string
    {
        return $this->razonSocial;
    }

    /**
     * @param string $razonSocial
     */
    public function setRazonSocial(string $razonSocial): void
    {
        $this->razonSocial = $razonSocial;
    }

    /**
     * @return string
     */
    public function getIdentificadorFiscal(): string
    {
        return $this->identificadorFiscal;
    }

    /**
     * @param string $identificadorFiscal
     */
    public function setIdentificadorFiscal(string $identificadorFiscal): void
    {
        $this->identificadorFiscal = $identificadorFiscal;
    }

    /**
     * @return string
     */
    public function getDireccion(): string
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     */
    public function setDireccion(string $direccion): void
    {
        $this->direccion = $direccion;
    }

    /**
     * @return string
     */
    public function getLocalidad(): string
    {
        return $this->localidad;
    }

    /**
     * @param string $localidad
     */
    public function setLocalidad(string $localidad): void
    {
        $this->localidad = $localidad;
    }

    /**
     * @return string
     */
    public function getProvincia(): string
    {
        return $this->provincia;
    }

    /**
     * @param string $provincia
     */
    public function setProvincia(string $provincia): void
    {
        $this->provincia = $provincia;
    }
}