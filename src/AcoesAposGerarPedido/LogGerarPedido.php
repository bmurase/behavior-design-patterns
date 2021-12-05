<?php

namespace Alura\DesignPattern\AcoesAposGerarPedido;

use SplSubject;
use SplObserver;

class LogGerarPedido implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo "Gerando log de geração de pedido".PHP_EOL;
    }
}