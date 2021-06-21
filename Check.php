<?php

function checaparenteses($str) {
    $len = strlen($str);
    $content = array();
    for ($i = 0; $i < $len; $i++) {
        switch ($str[$i]) {
            case '(': array_push($content, 0); break;
            case ')': 
                if (array_pop($content) !== 0)
                    return false;
            break;
            case '[': array_push($content, 1); break;
            case ']': 
                if (array_pop($content) !== 1)
                    return false;
            break;
            case '{': array_push($content, 2); break;
                case '}': 
                    if (array_pop($content) !== 2)
                        return false;
                break;            
            default: break;
        }
    }
    return (empty($content));
}

if (isset($_REQUEST['conteudo'])) {

    if (checaparenteses($_REQUEST['conteudo']) == "1") {

        echo "<p><font color='blue' size='2'>VÁLIDO</font></p>";

    } else {

        echo "<p><font color='red' size='2'>INVÁLIDO</font></p>";

    }


}


?>



<form method="post"name="form1">
    <input type="text" name="conteudo"> &nbsp; <input type="submit" value="Checar">
</form>
