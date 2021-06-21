<link rel="canonical" href="https://getbootstrap.com/docs/4.0/content/tables/">
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://getbootstrap.com/docs/4.0/assets/css/docs.min.css" rel="stylesheet">


<form name="form1" method="post" action="CadPessoasAction.php">
  <div class="form-group">
    <label for="exampleInputNome">Nome</label>
    <input type="text" class="form-control" id="Nome" Name="Nome" placeholder="Digite seu Nome">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail">Email</label>
    <input type="email" class="form-control" id="Email" Name="Email" aria-describedby="emailHelp" placeholder="Seu email" >
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEndereco">Endereço</label>
    <input type="text" class="form-control" id="Endereco" Name="Endereco" placeholder="Digite seu Endereco">
</div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>