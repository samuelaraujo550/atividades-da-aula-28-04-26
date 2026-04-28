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

namespace saude {
    function calcularIMC($peso, $altura)
    {
        return $peso / ($altura * $altura);
    }
    function ValorIdealAgua($peso)
    {
        return $peso * 35;
    }
    function FrequeciaMaxima($idade)
    {
        return 208 - 0.7 * $idade;
    }
    function LibrasParaQuilos($libras)
    {
        return $libras * 0.4536;
    }
    function CaloriasBasais($peso, $altura, $idade, $sexo)
    {
        if ($sexo == 'Masculino') {
            // Fórmula Para Homens
            $calorias = (10 * $peso) + (6.25 * $altura) - (5 * $idade) + 5;
        } else {
            // Fórmula Para Mulheres
            $calorias = (10 * $peso) + (6.25 * $altura) - (5 * $idade) - 161;
        }

        return $calorias;
    }
}
