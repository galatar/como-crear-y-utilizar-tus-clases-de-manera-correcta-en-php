<?php
// /public/index.php

require_once('../src/Cliente.php');
require_once('../src/Pedido.php');


$cliente = new Cliente();
$cliente->setId(100);
$cliente->setRazonSocial('Acme SA');
/** @var Pedido[] $pedidos */
$pedidos = array();
$pedido1 = new Pedido();
$pedido1->setId(1);
$pedido1->setIdCliente(100);
$pedido1->setFechaPedido(new DateTime());
$pedidos[] = $pedido1;

$pedido2 = new Pedido();
$pedido2->setId(2);
$pedido2->setIdCliente(100);
$pedido2->setFechaPedido(new DateTime('2018-07-14'));
$pedidos[] = $pedido2;

echo "<h1>" . $cliente->getRazonSocial() . "</h1>";
foreach ($pedidos as $pedido){
    echo "<li>Pedido " . $pedido->getId() . ": " . $pedido->getFechaPedido()->format('d/m/Y') . "</li>";
}
