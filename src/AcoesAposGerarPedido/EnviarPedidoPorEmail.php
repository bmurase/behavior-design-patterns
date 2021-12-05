<?php

namespace Alura\DesignPattern\AcoesAposGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado".PHP_EOL;
    }
}