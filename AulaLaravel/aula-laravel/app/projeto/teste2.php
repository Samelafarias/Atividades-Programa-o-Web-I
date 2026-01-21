<?php

require_once 'fisico/Produto.php';
require_once 'digital/Produto.php';

use fisico\Produto as Produtofisico;
use digital\Produto as Produtodigital;

$pf = new Produtofisico();
echo $pf->tipo();

echo PHP_EOL;

$pd = new Produtodigital();
echo $pd->tipo();