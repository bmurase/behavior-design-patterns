<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\AcoesAposGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAposGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAposGerarPedido\LogGerarPedido;
use Alura\DesignPattern\Commands\{GerarPedido, GerarPedidoHandler};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler(/* dependências */);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);