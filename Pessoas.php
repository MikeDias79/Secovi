
<?php
include('db.php');
?>


<link rel="canonical" href="https://getbootstrap.com/docs/4.0/content/tables/">
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://getbootstrap.com/docs/4.0/assets/css/docs.min.css" rel="stylesheet">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
      <th scope="col">Data de Inserção</th>
    </tr>
  </thead>
  <tbody>

  <tr>
      <td scope="row" colspan="5"><a href="CadPessoas.php">.:: Cadastrar Nova Pessoa ::.</a></th>
    </tr>

<?php




$sql = "
SELECT p.ID_Pessoa as ID, p.nome AS Nome, DATE_FORMAT(p.DT_Insercao,'%d/%m/%Y') AS DT, c.email AS Email, e.endereco AS Endereco 
FROM tb_pessoas p 
RIGHT JOIN tb_contatos c ON p.ID_Pessoa = c.ID_Pessoa
LEFT JOIN tb_enderecos e ON p.ID_Pessoa = e.ID_Pessoa
";

if (isset($_REQUEST['ID_Pessoa'])) {
    $sql = $sql . " WHERE p.ID_Pessoa = " . $_REQUEST['ID_Pessoa'];
}

$result = mysqli_query($conn, $sql) or die ("Erro 0x00102-SQLBuscaKeys - ".mysqli_error($conn)); 
while($row = mysqli_fetch_array($result))
{
?>
  <tr>
      <th scope="row"><?php echo $row['ID'] ?></th>
      <td><?php echo $row['Nome'] ?></td>
      <td><?php echo $row['Email'] ?></td>
      <td><?php echo $row['Endereco'] ?></td>
      <td><?php echo $row['DT'] ?></td>
    </tr>
<?php } ?>

</tbody>
</table>
