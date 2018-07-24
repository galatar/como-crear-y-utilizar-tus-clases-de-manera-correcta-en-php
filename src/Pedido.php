<?php


class Pedido
{
    /** @var int */
    private $id;

    /** @var int */
    private $idCliente;

    /** @var DateTime */
    private $fechaPedido;

    /** @var DateTime */
    private $fechaEnvio;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdCliente(): int
    {
        return $this->idCliente;
    }

    /**
     * @param int $idCliente
     */
    public function setIdCliente(int $idCliente): void
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return DateTime
     */
    public function getFechaPedido(): DateTime
    {
        return $this->fechaPedido;
    }

    /**
     * @param DateTime $fechaPedido
     */
    public function setFechaPedido(DateTime $fechaPedido): void
    {
        $this->fechaPedido = $fechaPedido;
    }

    /**
     * @return DateTime
     */
    public function getFechaEnvio(): DateTime
    {
        return $this->fechaEnvio;
    }

    /**
     * @param DateTime $fechaEnvio
     */
    public function setFechaEnvio(DateTime $fechaEnvio): void
    {
        $this->fechaEnvio = $fechaEnvio;
    }
}