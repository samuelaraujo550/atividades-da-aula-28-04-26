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

echo "\nO seu valor do seu IMC é: ", calcularImc(48, 1.66);

echo "\nA sua quantidade miníma de água é de: ", ValorIdealAgua(45);

echo "\nA sua frequência cardíaca máxima é: ", FrequeciaMaxima(19);

echo "\nO seu peso de libras para quilos é: ", LibrasParaQuilos(198.416);

echo "\nA suas calorías basais é de: ", CaloriasBasais(48, 19, "masculino", 1.66);
