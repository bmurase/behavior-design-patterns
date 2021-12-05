<?php

namespace Alura\DesignPattern\AcoesAposGerarPedido;

use SplSubject;
use SplObserver;

class EnviarPedidoPorEmail implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo "Enviando e-mail de pedido gerado".PHP_EOL;
    }
}