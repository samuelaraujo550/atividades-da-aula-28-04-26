<?php

namespace conversor {

    function dolar_para_real($valor, $cotacao)
    {
        return $valor * $cotacao;
    }

    function euro_para_real($valor, $cotacao)
    {
        return $valor * $cotacao;
    }

    function peso_para_real($valor, $cotacao)
    {
        return $valor * $cotacao;
    }

    function libra_para_real($valor, $cotacao)
    {
        return $valor * $cotacao;
    }

    function iene_para_real($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
}



namespace geometrica {
    function areaQuadrado($lado)
    {
        return $lado * $lado;
    }

    function areaRetangulo($base, $altura)
    {
        return $base * $altura;
    }

    function areaTriangulo($base, $altura)
    {
        return $base * $altura / 2;
    }

    function areaCirculo($raio)
    {
        return $raio * 3.14;
    }
    function areaTrapezio($baseMaior, $baseMenor, $altura)
    {
        return $baseMaior + $baseMenor * $altura;
    }
}
