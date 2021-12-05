<?php

namespace Alura\DesignPattern\Commands;

use DateTimeImmutable;
use Alura\DesignPattern\{Orcamento, Pedido};

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

        // Com o PedidoRepository
        echo "Cria pedido no banco de dados".PHP_EOL;
        // Com o MailService
        echo "Envia e-mail para cliente".PHP_EOL;
    }
}