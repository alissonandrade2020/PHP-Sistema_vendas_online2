<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;

$produtos = Produto::getProdutos();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/lista_compras.php';
include __DIR__.'/includes/footer.php';