<?php

namespace Alura\DesignPattern\Commands;

use DateTimeImmutable;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\AcoesAposGerarPedido\AcaoAposGerarPedido;

class GerarPedidoHandler
{
    /**
     * @var AcaoAposGerarPedido[]
     */
    private array $acoesAposGerarPedido = [];
    
    public function __construct(/* Pedido Repository, MailService */) {}

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
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

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->execute($pedido);
        }
    }
}