<?php

namespace Alura\DesignPattern\AcoesAposGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo "Gerando log de geração de pedido".PHP_EOL;
    }
}