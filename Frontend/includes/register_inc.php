<?php include_once '../Backend/Database/connection.php'; ?>
<?php include_once '../Backend/Database/create.php'; ?>
<body id="B">
<div class="container py-5">
    <div class="container py-5">
        <div class="col-md-6 container clearfix">
            <fieldset id="formu">
                <div class="row">
                    <div class="col-md-12">
                        <form action="index.php" method="POST" class="py-">
                            <fieldset class="formulario">
                                <h1 class="text-center" id="font">Cadastro</h1>

                                <!-- User alert message -->
                                <?php if (isset($msg1)) { ?>
                                    <div class="alert alert-danger" style="text-align: center" role="alert">
                                        <?php echo $msg1 ?>
                                    </div>
                                <?php } ?>

                                <?php if (isset($msg2)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $msg2 ?>
                                    </div>
                                <?php } ?> 

                                <?php if (isset($msg3)) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $msg3 ?> <a href="login.php">Fazer Login agora!</a>
                                    </div>
                                <?php } ?> <!-- end alert message -->


                                <div class="form-group row" style="margin-top: 30px">
                                    <div class="col-sm-12">
                                        <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-user-alt"></i></span>
                                            <input type="name" name="nome" class="form-control" placeholder="Nome do usuário">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-envelope"></i></span>
                                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-unlock-alt"></i></span>
                                            <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block py-2">
                                        <a class="font-weight-bold">Cadastrar</a>
                                    </button>
                                </div>
                                <div id="font">Tem um conta?&nbsp;<a href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Conecte-se</a></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
</body>