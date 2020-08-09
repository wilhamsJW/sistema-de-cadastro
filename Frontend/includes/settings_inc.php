<?php session_start();
include_once '../Backend/Database/update.php'; ?>

<?php $id = $_SESSION['id'];
$code = "1";
$cod = "2";
$co = "3";
?>

<div class="container">


    <?php if (isset($messeger)) { ?>
        <div class="alert alert-danger" style="text-align: center" role="alert">
            <?php echo  $messeger ?>
        </div>
    <?php } ?>

    <div class="row py-5">
        <div class="col- col-md-2 col-sm-12"></div>
        <div class=" col- col-md-8 col-sm-12">
            <div class="card text-white bg-primary mb-3">
                <h3 class="card-header"><i class="fas fa-exchange-alt"></i>&nbsp;Alterar usuário e-mail ou senha</h3>

                <div class="container">
                    <form action="settings.php" method="POST">

                        <!-- Alerts user -->
                        <?php if (isset($message1)) { ?>
                            <div class="alert alert-danger" style="text-align: center" role="alert">
                                <?php echo  $message1 ?>
                            </div>
                        <?php } ?>

                        <?php if (isset($message2)) { ?>
                            <div class="alert alert-success" style="text-align: center" role="alert">
                                <?php echo  $message2 ?>
                            </div>
                        <?php } ?><!-- End alert user -->

                        <label for="validationCustom01"><i class="fas fa-user"></i>&nbsp;Usuário</label>
                        <div class="input-group mb-3">
                            <input type="text" name="nome" class="form-control" maxlength="20" placeholder="alterar usuário" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                            <input name="id" style="display:none;" value="<?php echo $id ?>">
                            <input name="code" style="display:none;" value="<?php echo $code ?>">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-light" style="background-color: #4b24a8;" title="alterar usuário"><i class="fas fa-exchange-alt"></i></button>
                            </div>
                        </div>
                    </form>

                    <form action="settings.php" method="POST">
                        <label for="validationCustom01"><i class="fas fa-envelope-square"></i>&nbsp;E-mail</label>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" maxlength="40" placeholder="alterar e-mail" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                            <input name="id" style="display: none;" value="<?php echo $id ?>">
                            <input name="cod" style="display:none;" value="<?php echo $cod ?>">
                            <div class="input-group-append">
                                <button class="btn btn-outline-light" type="submit" style="background-color: #4b24a8;" title="alterar e-mail"><i class="fas fa-exchange-alt"></i></button>
                            </div>
                        </div>
                    </form>

                    <form action="settings.php" method="POST">
                        <label for="validationCustom01"><i class="fas fa-lock"></i>&nbsp;Senha</label>
                        <div class="input-group mb-3">
                            <input type="password" name="senha" class="form-control" maxlength="20" placeholder="alterar senha" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                            <input name="id" style="display: none;" value="<?php echo $id ?>">
                            <input name="co" style="display:none;" value="<?php echo $co ?>">
                            <div class="input-group-append">
                                <button class="btn btn-outline-light" type="submit" style="background-color: #4b24a8;" title="alterar senha"><i class="fas fa-exchange-alt"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>