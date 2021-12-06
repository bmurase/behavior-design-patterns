<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use ArrayIterator;
use IteratorAggregate;

class ListaDeOrcamentos implements IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento): void
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->orcamentos,
            fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->orcamentos);
    }
}