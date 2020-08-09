<?php session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}
?>

<?php
include_once '../Backend/Database/connection.php';
include_once '../Backend/Database/update.php';

$edit = 0;
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM tasks WHERE id = $id";
$query = mysqli_query($conecta, $sql);

while ($array = mysqli_fetch_assoc($query)) {
    $title = $array['title'];
    $description = $array['description'];
    $start_date = $array['start_date'];
    $last_date = $array['last_date'];
    $user = $array['user'];
    $stats = $array['stats'];
    $id = $array['id'];

?>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="../Backend/Database/update.php" method="POST" novalidate>
                    <div class="row bg-light">
                        <div class="col-md-3">
                        </div>
                        <div class="card text-black" style="color:black">
                            <h3 style="padding: 20px;">Editar tarefa</h3>
                            <div class="card-body" style="font-weight: bold;">

                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="validationCustom01"><i class="fas fa-book-reader"></i>&nbsp;Título</label>
                                        <input type="text" name="title" value="<?php echo $title ?>" class="form-control" maxlength="30" id="validationCustom01" placeholder="Dê um título a sua tarefa" required>
                                        <input name="edit" value="<?php echo $edit ?>">
                                        <div class="invalid-feedback">
                                            Por favor, digite o título da sua tarefa.
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="validationCustom01"><i class="fas fa-keyboard"></i>&nbsp;Descrição</label>
                                        <input type="text" name="description" value="<?php echo $description ?>" class="form-control" maxlength="200" id="validationCustom01" placeholder=" Até 200 caracteres" required>
                                        <div class="invalid-feedback">
                                            Por favor, descreva sua tarefa.
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="validationCustom01"><i class="fas fa-calendar-minus"></i>&nbsp;Data inicial</label>
                                        <input type="date" name="start_date" value="<?php echo $start_date ?>" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2">
                                        <input name="id" style="display: none;" value="<?php echo $id ?>">
                                        <div class="invalid-feedback">
                                            Por favor, informe uma data!
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="validationCustom01"><i class="fas fa-calendar-minus"></i></i>&nbsp;Data final</label>
                                        <input type="date" name="last_date" value="<?php echo $last_date ?>" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2">
                                        <div class="invalid-feedback">
                                            Por favor, informe uma data!
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="validationCustom01"><i class="fas fa-user"></i>&nbsp;Usuário</label>
                                        <input type="text" name="user" value="<?php echo $user ?>" class="form-control" maxlength="20" id="validationCustom01" placeholder="Coloque seu nome" required>
                                        <div class="invalid-feedback">
                                            Por favor, digite o nome do usuário!.
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="validationCustom01"><i class="fas fa-tasks"></i></i>&nbsp;Status</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            </div>
                                            <select name="stats" class="custom-select" id="inputGroupSelect01">
                                                <option value="<?php echo $stats ?>" selected>Qual o status da sua tarefa?</option>
                                                <option value="recebido">Recebido</option>
                                                <option value="iniciado">Iniciado</option>
                                                <option value="Feito 25%">Feito 25%</option>
                                                <option value="Feito 50%">Feito 50%</option>
                                                <option value="Feito 75%">Feito 75%</option>
                                                <option value="100% Concluído!">100% Concluído!</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor, insira o status da tarefa!.
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="" style="text-align: right;">
                                            <a href="tasks.php" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-hand-point-left"></i>&nbsp;Back</a>
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>