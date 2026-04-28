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

echo "\narea do quadrado: ", areaQuadrado(5);

echo "\narea do retangulo: ", areaRetangulo(9, 6);

echo "\narea do triangulo: ", areaTriangulo(19, 16);

echo "\narea do circulo: ", areaCirculo(18);

echo "\niene para real: ", areaTrapezio(18, 23, 16);
