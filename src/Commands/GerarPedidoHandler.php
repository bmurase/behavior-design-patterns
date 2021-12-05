<?php

namespace Alura\DesignPattern\Commands;

use DateTimeImmutable;
use Alura\DesignPattern\{AcoesAoGerarPedido\CriarPedidoNoBanco,
    AcoesAoGerarPedido\EnviarPedidoPorEmail,
    AcoesAoGerarPedido\LogGerarPedido,
    Orcamento,
    Pedido};

class GerarPedidoHandler
{
    public function __construct(/* Pedido Repository, MailService */)
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        $criarPedidoNoBanco = new CriarPedidoNoBanco();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();
        $logGerarPedido = new LogGerarPedido();

        $criarPedidoNoBanco->execute($pedido);
        $enviarPedidoPorEmail->execute($pedido);
        $logGerarPedido->execute($pedido);
    }
}