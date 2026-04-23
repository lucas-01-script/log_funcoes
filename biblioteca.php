<?php
namespace matematia{
    function somar ($a, $b, $c){
        return $a + $b + $c;
    }
    function subtrair ($a, $b){
        return $a - $b;

    }
}
namespace texto{
    function concatenar ($nome, $sobrenome){
        return $nome . " " . $sobrenome;
    }
}



namespace logica{
    function vereficaidade($idade){
        if ($idade >= 18){
            echo "maior de idade!";

        }
        else{
            echo "menor de idade!";
        }
    }
}