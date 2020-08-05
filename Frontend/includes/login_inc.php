<?php include_once '../Backend/Database/read.php' ?>
<body id="B">
<div class="container py-5" style="margin-top: 40px;">
    <div class="container py-5">
        <div class="col-md-6 container clearfix">
            <fieldset id="formu">
                <form action="login.php" method="POST" class="py-">
                    <fieldset class="formulario">
                        <h1 class="text-center" id="font">Login</h1>

                        <?php if (isset($ms)) { ?>
                            <div class="alert alert-danger" style="text-align: center" role="alert">
                                <?php echo $ms ?>
                            </div>
                        <?php } ?>

                        <?php if (isset($mensagem)) { ?>
                            <div class="alert alert-danger" style="text-align: center" role="alert">
                                <?php echo $mensagem ?>
                            </div>
                        <?php } ?>

                        <div class="form-group row">

                            <div class="col-sm-12">
                                <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    <input name="msg" value="<?php echo "1" ?>" style="display: none;">
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
                        <div style="text-align: right;">
                            <button type="submit" id="font" class="btn btn-sm btn-primary"><i class="fas fa-sign-in-alt"></i>&nbsp;Entrar</button>
                        </div>
                        <div id="font">Não tem uma conta?&nbsp;<a href="index.php"><i class="far fa-hand-point-left"></i>&nbsp;Cadastre-se</a></div>
                    </fieldset>
                </form>
            </fieldset>
        </div>
    </div>
</div>
</body>