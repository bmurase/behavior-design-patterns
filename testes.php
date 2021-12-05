<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calcula($orcamento);