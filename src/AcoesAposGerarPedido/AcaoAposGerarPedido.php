<?php

namespace Alura\DesignPattern\AcoesAposGerarPedido;

use Alura\DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void;
}