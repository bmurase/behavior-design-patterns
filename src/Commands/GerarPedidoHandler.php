<?php

namespace Alura\DesignPattern\Commands;

use SplSubject;
use SplObserver;
use DateTimeImmutable;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\AcoesAposGerarPedido\AcaoAposGerarPedido;

class GerarPedidoHandler implements SplSubject
{
    /**
     * @var SplObserver[]
     */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;
    
    public function __construct(/* Pedido Repository, MailService */) {}

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        $this->pedido = $pedido;
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
    }

    public function notify()
    {
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}