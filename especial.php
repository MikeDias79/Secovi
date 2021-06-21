<?php

if(file_exists('especial2.txt')){
    unlink('especial2.txt');
}

$linha = "";
$arq = fopen('especial.txt', 'r');
$Narq = fopen("especial2.txt", "a");

while(!feof($arq))
{
    $linha = fgets($arq, 1024);
    if (strpos(strtolower($linha), 'especial') !== false) {
        $Nlinha = fwrite($Narq, $linha);
        echo "<b>" . $linha . "</b><br>";
    } else {
        echo "<font size='-1'>" . $linha . "</font><br>";
    }
}


$arq = fclose($arq);
$Narq = fclose($Narq);



echo "<p>No arquivo especial2.txt estão somente as linhas destacadas.</p>";



?>

