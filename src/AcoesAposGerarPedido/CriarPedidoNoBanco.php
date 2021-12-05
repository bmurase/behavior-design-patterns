<?php

namespace Alura\DesignPattern\AcoesAposGerarPedido;

use SplSubject;
use SplObserver;

class CriarPedidoNoBanco implements SplObserver
{
    public function update(SplSubject $subject)
    {
        // pedido: $subject->pedido
        echo "Salvando pedido no banco de dados".PHP_EOL;
    }
}