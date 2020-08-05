<?php
include_once '../Backend/Database/connection.php';
include_once '../Backend/Database/read.php';
//include_once '../Backend/Database/create.php';
$id = $_SESSION['id'];
$id_page = "2";

//session_start(); 
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}
?>

<div class="container">

    <form action="../Backend/Database/create.php" method="POST" class="needs-validation" novalidate>
        <fieldset class="">
            <div class="row bg-light">
                <div class="col-md-3">
                </div>
                <div class="col">
                    <div class="card text-black bg- mb-3" style="color:black">
                        <h3 style="padding: 20px;">Criar nova tarefa</h3>

                        <!-- alerts -->
                        <?php if (isset($msg5)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $msg5 ?>
                            </div>
                        <?php } ?>
                        <!-- end alerts -->

                        <div class="card-body" style="font-weight: bold;">
                            <div class="form-group">
                                <div class="col-md-9 mb-3">
                                    <label for="validationCustom01"><i class="fas fa-book-reader"></i>&nbsp;Título</label>
                                    <input type="text" class="form-control" maxlength="40" id="validationCustom01" placeholder="Dê um título a sua tarefa" name="title" required>
                                    <input name="id" style="display: none;" value="<?php echo $id ?>">
                                    <input name="id_page" style="display:none;" value="<?php echo $id_page ?>">
                                    <div class="invalid-feedback">
                                        Por favor, informe o título da sua tarefa.
                                    </div>
                                    <div class="valid-feedback">
                                        Tudo certo!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 mb-3">
                                    <label for="validationCustom01"><i class="fas fa-keyboard"></i>&nbsp;Descrição</label>
                                    <input type="text" class="form-control" maxlength="200" id="validationCustom01" placeholder=" Até 200 caracteres" name="description" required>
                                    <div class="invalid-feedback">
                                        Por favor, descreva sua tarefa.
                                    </div>
                                    <div class="valid-feedback">
                                        Por favor, descreva sua tarefa.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 mb-3">
                                    <label for="validationCustom01"><i class="fas fa-calendar-minus"></i>&nbsp;Data inicial</label>
                                    <input type="date" name="start_date" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2" required>
                                    <div class="invalid-feedback">
                                        Por favor, informe uma data válida!
                                    </div>
                                    <div class="valid-feedback">
                                        Por favor, informe uma data válida!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 mb-3">
                                    <label for="validationCustom01"><i class="fas fa-calendar-minus"></i></i>&nbsp;Data final</label>
                                    <input type="date" name="last_date" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2" required>
                                    <div class="invalid-feedback">
                                        Por favor, informe uma data!
                                    </div>
                                    <div class="valid-feedback">
                                        Por favor, informe uma data válida!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 mb-3">
                                    <label for="validationCustom01"><i class="fas fa-user"></i>&nbsp;Usuário</label>
                                    <input type="text" class="form-control" maxlength="20" id="validationCustom01" placeholder="Coloque seu nome" name="user" required>
                                    <div class="invalid-feedback">
                                        Por favor, informe seu nome!
                                    </div>
                                    <div class="valid-feedback">
                                        Tudo certo!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 mb-3">
                                    <label for="validationCustom01"><i class="fas fa-tasks"></i></i>&nbsp;Status</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                        </div>
                                        <select name="stats" class="custom-select" id="inputGroupSelect01">
                                            <option selected>Qual o status da sua tarefa?</option>
                                            <option value="recebido">Recebido</option>
                                            <option value="iniciado">Iniciado</option>
                                            <option value="Feito 25%">Feito 25%</option>
                                            <option value="Feito 50%">Feito 50%</option>
                                            <option value="Feito 75%">Feito 75%</option>
                                            <option value="100% Concluído!">100% Concluído!</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                        Por favor, digite o nome do cliente.
                                    </div>
                                    <div class="valid-feedback">
                                        Tudo certo!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9" style="text-align: right;">
                            <a href="tasks.php" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-hand-point-left"></i>&nbsp;Back</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                </div>

            </div>
        </fieldset>
    </form>
</div>