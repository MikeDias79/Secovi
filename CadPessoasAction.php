
<?php
include('db.php');


$Nome = $_REQUEST['Nome'];
$Email = $_REQUEST['Email'];
$Endereco = $_REQUEST['Endereco'];

$sql = "INSERT  INTO tb_pessoas(Nome,DT_Insercao) VALUES ('" . $Nome . "','" . date('Y-m-d') . " 00:00:00')";
mysqli_query($conn, $sql);
$ID_Pessoa =mysqli_insert_id($conn);

if (trim($Email) != "") {
  $sql = "INSERT  INTO tb_contatos(Email,ID_Pessoa) VALUES ('" . $Email . "'," . $ID_Pessoa . ")";
  mysqli_query($conn, $sql);  
}

if (trim($Endereco) != "") {
  $sql = "INSERT  INTO tb_enderecos(Endereco,ID_Pessoa) VALUES ('" . $Endereco . "'," . $ID_Pessoa . ")";
  mysqli_query($conn, $sql);  
}

header("Location: Pessoas.php");

?>