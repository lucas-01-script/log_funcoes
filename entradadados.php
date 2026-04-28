<?php


require_once 'bibliotecaGeometria.php';

use function conversao\calcularImc;
use function conversao\valorIdealAgua;
use function conversao\frequenciaCardiacaMaxima;
use function conversao\converterLibrasParaQuilo;
use function conversao\calcularCaloriasBasais;

echo "O lmc deu: ", calcularImc (50, 4);
echo "\nO valor ideal de água é: ", valorIdealAgua (65);
echo "\nA frequencia cardiaca máxima é: ", frequenciaCardiacaMaxima (10, 15);
echo "\nA conversão deu: ", converterLibrasParaQuilo (58);
echo "\nO tanto de calorias basais é: ", calcularCaloriasBasais (50, 1.75, 15, "Masculino");

?>
