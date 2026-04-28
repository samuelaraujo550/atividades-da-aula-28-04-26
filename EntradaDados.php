<?php

// função dolar_para_real($valor, $cotação)
// função euro_para_real($valor, $cotação)
// função peso_para_real($valor, $cotação)
// função libra_para_real($valor, $cotação)
// função iene_para_real($valor, $cotação)
require_once "bibliotecaFuncoes.php";

use function conversor\dolar_para_real;
use function conversor\euro_para_real;
use function conversor\peso_para_real;
use function conversor\libra_para_real;
use function conversor\iene_para_real;

echo "dolar para real: ", dolar_para_real(8, 5);

echo "\neuro para real: ", euro_para_real(10, 5.82);


echo "\npeso argentino para real: ", peso_para_real(17, 0.0035);


echo "\nlibra para real: ", libra_para_real(12, 6.71);


echo "\niene para real: ", iene_para_real(20000, 0.031);
