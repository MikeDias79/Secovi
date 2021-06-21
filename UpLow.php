<?php

function UpLow($str) {

    $str = str_replace(" ", "", $str);
    $arr1 = str_split($str);
    $len =  count($arr1);
    $cont = 0;
    $result = "";
    
    while($cont <= ($len - 1)) {
    
        if($cont % 2 == 0){
            $result = $result . strtoupper($arr1[$cont]);
        } else {
            $result = $result . strtolower($arr1[$cont]);
        }
    
        $cont++;
    }
    
    return $result;

}



if (isset($_REQUEST['conteudo'])) {

        echo "<p><font color='black' size='5'>" . UpLow($_REQUEST['conteudo'])  . "</font></p>";

}


?>



<form method="post"name="form1">
    <input type="text" name="conteudo"> &nbsp; <input type="submit" value="Checar">
</form>
