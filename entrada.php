<php
requeire_once "bliblioteca.php";



use function logica\verificaidade
use function matematica\somar;
use function texto/concatenar;

echo "soma: ", somar (1,1,1), "\n";
echo "nome completo:" , concatenar ("joao , silva");




echo "Stutus :", verificaidade (19);