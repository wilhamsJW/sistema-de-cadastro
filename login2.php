<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/menu.php' ?>
<?php include_once 'loginsenha.php' ?>

<form action="login2.php" method="POST">
<div class="container bg-light py-5">
<div class="border border-primary py-5">
<div class="col-md-6 container clearfix">
<h1 class="text-center">Login</h1>
   
  <div class="form-group row py-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
    </div>
  </div>
  <div style="text-align: right;">
  <button type="submit" class="btn btn-primary">Entrar</button>
  </div>

  <?php if (isset($mensagem)){ ?> <!--isset verifica se a var está configurada ou definida, se tiver definida é pq deu falha pois já vem do arquivo loginsenha, se não tiver configurada é pq foi um sucesso-->
      <p><?php echo $mensagem ?></p>
  <?php } ?> <!--lembre se do fechamento da chave nessa outra tag html-->

  </form>
  </div>
  </div>
  </div>
  </span>
  </form>
 
<?php include_once 'includes/footer.php' ?>
