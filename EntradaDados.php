<?php


require_once "bibliotecaFuncoes.php";
//funcoes
use function conversor\dolar_para_real;
use function conversor\euro_para_real;
use function conversor\peso_para_real;
use function conversor\libra_para_real;
use function conversor\iene_para_real;

//areas
use function geometrica\areaQuadrado;
use function geometrica\areaRetangulo;
use function geometrica\areaTriangulo;
use function geometrica\areaCirculo;
use function geometrica\areaTrapezio;

//saude

use function saude\calcularIMC;
use function saude\ValorIdealAgua;
use function saude\FrequeciaMaxima;
use function saude\LibrasParaQuilos;
use function saude\CaloriasBasais;

$op = "";
$opcoes = "";




while ($opcoes != 4) {
    echo "\nMenu Escolha uma das categorias abaixo:
    1 - Conversão
    2 - Geometria
    3 - Saúde
    4 - Sair
    \n";
    $opcoes = readline(">>> ");

    switch ($opcoes) {
        case 1:
            echo "Conversão
            Escolha uma das opções abaixo:
            1 - Dolar para Real
            2 - Euro para Real
            3 - Peso para Real
            4 - Libra para Real
            5 - Iene para Real
            \n";
            $op = readline(">>> ");
            switch ($op) {
                case 1:
                    $dolar = readline("Valor em dolar: ");
                    echo "Valor em real: ", dolar_para_real($dolar, 5.00, 0);
                    break;
                case 2:
                    $euro = readline("Valor em euro: ");
                    echo "Valor em real: ", euro_para_real($euro, 5.84, 0);
                    break;
                case 3:
                    $peso = readline("Valor em peso: ");
                    echo "Valor em real: ", peso_para_real($peso, 0.0035, 0);
                    break;
                case 4:
                    $libra = readline("Valor em libra: ");
                    echo "Valor em real: ", libra_para_real($libra, 6.71, 0);
                    break;
                case 5:
                    $iene = readline("Valor em iene: ");
                    echo "Valor em real: ", iene_para_real($iene, 0.031, 0);
                    break;
                default:
                    echo "Opção inválida!";
            }
            break;
        case 2:
            echo "Geometria
            Escolha uma das opções abaixo:
            1 - Area do quadrado
            2 - Area do retangulo
            3 - Area do triangulo
            4 - Area do circulo
            5 - Area do trapezio
            \n";
            $op = readline(">>> ");
            switch ($op) {
                case 1:
                    $lado = readline("Valor do lado: ");
                    echo "Area do quadrado: ", areaQuadrado($lado);
                    break;
                case 2:
                    $base = readline("Valor da base: ");
                    $altura = readline("Valor da altura: ");
                    echo "Area do retangulo: ", areaRetangulo($base, $altura);
                    break;
                case 3:
                    $base = readline("Valor da base: ");
                    $altura = readline("Valor da altura: ");
                    echo "Area do triangulo: ", areaTriangulo($base, $altura);
                    break;
                case 4:
                    $raio = readline("Valor do raio: ");
                    echo "Area do circulo: ", areaCirculo($raio);
                    break;
                case 5:
                    $baseMaior = readline("Valor da base maior: ");
                    $baseMenor = readline("Valor da base menor: ");
                    $altura = readline("Valor da altura: ");
                    echo "Area do trapezio: ", areaTrapezio($baseMaior, $baseMenor, $altura);
                    break;
                default:
                    echo "Opção inválida!";
            }
            break;
        case 3:

            echo "Saúde
            Escolha uma das opções abaixo:
            1 - Calcular IMC
            2 - Valor ideal de agua
            3 - Frequencia cardiaca maxima
            4 - Converter libras para kilo
            5 - Calcular calorias basais
            \n";
            $op = readline(">>> ");
            switch ($op) {
                case 1:
                    $peso = readline("Valor do peso: ");
                    $altura = readline("Valor da altura: ");
                    echo "Calcular IMC: ", calcularImc($peso, $altura);
                    break;
                case 2:
                    $peso = readline("Valor do peso: ");
                    echo "Valor ideal de agua: ", valorIdealAgua($peso);
                    break;
                case 3:
                    $idade = readline("Valor da idade: ");
                    echo "Frequencia cardiaca maxima: ", FrequeciaMaxima($idade);
                    break;
                case 4:
                    $libras = readline("Valor em libras: ");
                    echo "Converter libras para kilo: ", LibrasParaQuilos($libras);
                    break;
                case 5:
                    $peso = readline("Valor do peso: ");
                    $idade = readline("Valor da idade: ");
                    $sexo = readline("Valor do sexo (Homem ou Mulher): ");
                    $altura = readline("Valor da altura (em cm): ");
                    echo "Calcular calorias basais: ", CaloriasBasais($peso, $idade, $sexo, $altura);
                    break;
                default:
                    echo "Opção inválida!";
            }
            break;
    }
}
