<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\Commands\{GerarPedido, GerarPedidoHandler};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler(/* dependências */);
$gerarPedidoHandler->execute($gerarPedido);