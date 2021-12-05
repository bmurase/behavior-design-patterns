<?php

use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$listaOrcamentos = [];

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->reprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 1350;

$listaOrcamentos = [$orcamento1, $orcamento2, $orcamento3, 'aceita qualquer coisa e pode dar zika'];

foreach ($listaOrcamentos as $orcamento) {
    echo "Valor: ".$orcamento->valor.PHP_EOL;
    echo "Estado: ".get_class($orcamento->estadoAtual).PHP_EOL;
    echo "Qtd. Itens: ".$orcamento->quantidadeItens.PHP_EOL;

    echo PHP_EOL;
}