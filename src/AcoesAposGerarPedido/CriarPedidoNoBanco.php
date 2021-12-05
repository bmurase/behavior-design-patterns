<?php

namespace Alura\DesignPattern\AcoesAposGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function execute(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados".PHP_EOL;
    }
}