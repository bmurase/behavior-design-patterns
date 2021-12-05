<?php

namespace Alura\DesignPattern\Commands;

use DateTimeImmutable;
use Alura\DesignPattern\{Orcamento, Pedido};

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroItens,
        string $nomeCliente
    ) {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function getNumeroItens(): int
    {
        return $this->numeroItens;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }
}