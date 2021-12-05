<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo "Gerando log de geração de pedido";
    }
}