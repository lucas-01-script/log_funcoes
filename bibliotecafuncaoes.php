<?php
namespace converao{
    function dolarParaReal($valor, $cotacao){
        return $valor * $cotacao;
    }

    function euroParaReal($valor, $cotacao){
        return $valor * $cotacao;
    }

    function pesoParaReal($valor, $cotacao){
        return $valor * $cotacao;
    }

    function libraParaReal($valor, $cotacao){
        return $valor * $cotacao;
    }

    function ieneParaReal($valor, $cotacao){
        return $valor * $cotacao;
    }
}
// Função areaQuadrado($lado)
// Função areaRetangulo($base, $altura)
// Função areaTriangulo($base, $altura)
// Função areaCirculo($raio)
// Função areaTrapezio($baseMaior, $baseMenor, $altura)

namespace calcular{
    function areaQuadrado($lado){
        return $lado * $lado;
    }

    function areaRetangulo($base, $altura){
        return $base * $altura;
    }

    function areaTriangulo($base, $altura){
        return $base * $altura;
    }

    function areaCirculo($raio){
        return $raio**2 * 3.14;
    }

    function areaTrapezio($baseMaior, $baseMenor, $altura){
        return $baseMaior * $baseMenor * $altura;
    }
}
// Função calcularImc($peso, $altura)
// Função valorIdealAgua($peso)
// Função frequenciaCardiacaMaxima($idade)
// Função converterLibrasParaQuilo($libras)
// Função calcularCaloriasBasais($peso, $idade, $sexo)

namespace conversao{
    function calcularImc($peso, $altura){
        return $peso / $altura * $altura;
    }

    function valorIdealAgua($peso){
        return $peso * 35;
    }

    function frequenciaCardiacaMaxima($idade, $batimentos){
        return $batimentos - $idade;
    }

    function converterLibrasParaQuilo($libras){
        return $libras * 0.4536;
    }

    function calcularCaloriasBasais($peso, $idade, $altura, $sexo){
        if($sexo ="Masculino"){
            return 66.5 + (13.75 * $peso) + (5.003 * $altura) - (6.75 * $idade);
        }
        else{
            return 655.1 + (9.563 * $peso) + (1.850 * $altura) - (4.676 * $idade);
        }
    }
}