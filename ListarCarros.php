<?php

$arq = fopen('carros.txt', 'r');

$IDS = "0";

while(!feof($arq))
{
    $linha = fgets($arq, 1024);
    $IDS = $IDS . "," $linha;
    
}
$arq = fclose($arq);


$servidor = "localhost";
$usuario = "root";
$senha ="";
$conexao = pg_connect($servidor, $usuario, $senha) or die ("Não foi possível conectar ao servidor PostGreSQL");

$qry = "SELECT * FROM CARROS WHERE ID IN (" . $IDS . ")";

$result = pg_query($conexao, $qry);

while ($row = pg_fetch_array($result)) {
    echo "<p>";
    echo "Modelo:" . $row['modelo'];
    echo "<br>";
    echo "cor:" . $row['cor'];
    echo "</p>";

  }

?>

