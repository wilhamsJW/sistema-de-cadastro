<?php include_once '../Backend/Database/connection.php'; ?>
<?php include_once '../Backend/Database/read.php'; ?>
<?php include_once '../Backend/Database/update.php'; ?>

<!-- Protect page -->
<?php
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}
?>
<!-- End Protect -->


<div class="container">
    <div class="">

    <!-- Saudação ao usuário -->
    <?php  //print_r($id);
        if (isset($_SESSION['user'])) {
        ?>
            <div class="container" id="saudacao" style="margin-top: 10px; font-weight:bold; text-align:center">
                <h1><?php echo "Bem Vindo(a)," . " " . $_SESSION["user"] . "!" ?>&nbsp;<i class="far fa-smile"></i></h1>
                <h5>Aqui você poderá gerenciar suas próprias tarefas e organizar sua vida profissional.</h5>
            </div>

        <?php } ?>

        <?php if (isset($msg4)) { ?>
            <div class="alert alert-info" role="alert">
                <?php echo $msg4 ?>
            </div>
        <?php } ?>



        <?php

        $id =  $_SESSION['id'];
        $query_list = "SELECT * from tasks WHERE user_id = $id";
        $query = mysqli_query($conecta, $query_list);
        while ($array = mysqli_fetch_assoc($query)) {
            //$user_id = $array['user_id'];
            $title = $array['title'];
            $description = $array['description'];
            $start_date = $array['start_date'];
            $last_date = $array['last_date'];
            $user = $array['user'];
            $stats = $array['stats'];
            $id = $array['id'];


        ?>

            <!-- initial card tasks -->
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                    <h4 style="color: black;font-weight:bold;margin-top:20px"><i class="fas fa-tasks"></i>&nbsp;Gerenciador de tarefas</h4>
                        <div class="card text-white bg-primary mb-3" style="width: px ;">
                            <div class="card-header">
                                <h2><i class="fas fa-book-reader"></i>&nbsp;Título:</h2>
                                <p class="card-text"><?php echo $title ?></p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-keyboard"></i>&nbsp;Descrição:</h6>
                                    <p class="card-text"><?php echo $description ?></p>
                                    <h6><i class="fas fa-calendar-minus"></i>&nbsp; Data ínicio: <?php echo $start_date ?></h6>
                                    <h6><i class="fas fa-calendar-minus"></i>&nbsp; Data final: <?php echo $last_date ?></h6>
                                    <h6><i class="fas fa-user"></i>&nbsp; Usuário: <?php echo $user ?></h6>
                                    <h6><i class="fas fa-tasks"></i></i>&nbsp; Status: <?php echo $stats ?></h6>
                                    <h6><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;Código: <?php echo $id ?></h6>
                                    <div style="text-align: right;color:bisque">
                                        <a href="edit.php?id=<?php echo $id ?>" role="button" class="btn btn-outline-light"><i class="fas fa-edit"></i></a>
                                        <!--Button Delete-->
                                        <a href="banco_de_dados/delete.php?id=<?php echo $id ?>" data-toggle="modal" data-target="#Modaledit" data-whatever="<?php echo $id ?>" style="color:tomato"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
                                    </div>
                            </div>
                        </div>
                    </div>



                    <!--   <div class="col-md-4 col-sm-12">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <h3 class="card-header"><i class="fas fa-book-reader"></i>&nbsp;Título</h3>
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-keyboard"></i>&nbsp;Descrição:< ?php echo "" ?></h6>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                            <h6><i class="fas fa-calendar-minus"></i>&nbsp; Data ínicio:</h6>
                            <h6><i class="fas fa-calendar-minus"></i>&nbsp; Data final:</h6>
                            <h6><i class="fas fa-user"></i>&nbsp; Usuário:</h6>
                            <h6><i class="fas fa-tasks"></i></i>&nbsp; Status:</h6>
                            <h6><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;Código:</h6>
                            <div style="text-align: right;color:bisque">
                                <!- Button edit 
                                <a href="edit.php?id=< ?php echo "oii"?>" role="button" class="btn btn-outline-light"><i class="fas fa-edit"></i></a>
                                <! Button Delete 
                                <a href="banco_de_dados/delete.php?id=< ?php echo $id ?>" data-toggle="modal" data-target="#Modaledit" data-whatever="DELET" style="color:tomato"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
                            </div>
                        </div>
                    </div>
                </div> -->


                    <div class="col-md-2"></div>
                </div>
            </div> <!-- end card tasks -->

        <?php } ?>
    </div>
</div>

<!-- initial modal edite
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="../Backend/Database/create.php" method="POST" novalidate>
                    <div class="row bg-light">
                        <div class="col-md-3">
                        </div>
                        <div class="card text-black" style="color:black">
                            <h3 style="padding: 20px;">Editar tarefa</h3>
                            <div class="card-body" style="font-weight: bold;">

                                <div class="form-group">
                                    <div class="col-md-9 mb-3">
                                        <label for="validationCustom01"><i class="fas fa-book-reader"></i>&nbsp;Título</label>
                                        <input type="text" class="form-control" maxlength="20" id="validationCustom01" placeholder="Dê um título a sua tarefa" name="nome1" required>
                                        <div class="invalid-feedback">
                                            Por favor, digite o título da sua tarefa.
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-9 mb-3">
                                        <label for="validationCustom01"><i class="fas fa-keyboard"></i>&nbsp;Descrição</label>
                                        <input type="text" class="form-control" maxlength="20" id="validationCustom01" placeholder=" Até 100 caracteres" name="nome1" required>
                                        <div class="invalid-feedback">
                                            Por favor, descreva sua tarefa.
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-9 mb-3">
                                        <label for="validationCustom01"><i class="fas fa-calendar-minus"></i>&nbsp;Data inicial</label>
                                        <input type="date" name="date_end" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2">
                                        <div class="invalid-feedback">
                                            Por favor, informe uma data!
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-9 mb-3">
                                        <label for="validationCustom01"><i class="fas fa-calendar-minus"></i></i>&nbsp;Data final</label>
                                        <input type="date" name="date_end" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2">
                                        <div class="invalid-feedback">
                                            Por favor, informe uma data!
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-9 mb-3">
                                        <label for="validationCustom01"><i class="fas fa-user"></i>&nbsp;Usuário</label>
                                        <input type="text" class="form-control" maxlength="20" id="validationCustom01" placeholder="Coloque seu nome" name="nome1" required>
                                        <div class="invalid-feedback">
                                            Por favor, digite o nome do usuário!.
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
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Qual o status da sua tarefa?</option>
                                                <option value="1">Iniciado</option>
                                                <option value="2">Em andamento</option>
                                                <option value="3">Concluído</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor, insira o status da tarefa!.
                                        </div>
                                        <div class="valid-feedback">
                                            Tudo certo!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-md-9" style="text-align: right;">
                    <a href="clientes.php" type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-hand-point-left"></i>&nbsp;Voltar</a>
                    <button type="submit" role="button" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>  End Modal Edit -->




<!-- Modal Delete -->
<div class="modal fade" id="Modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir?</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <form action="../Backend/Database/delete.php" method="POST">
                    <textarea name="id" style="display:none;"></textarea>

                    <div class="modal-footer">
                        <a class="btn btn-sm btn-secondary" href="tasks.php" role="button"><i class="fas fa-times-circle"></i>&nbsp;Não!</a>
                        <button type="submit" class="btn btn-sm btn-danger" class="btn btn-primary" href="../Backend/Database/delete.php?id=<?php echo $id ?>"><i class="far fa-trash-alt"></i>&nbsp;Sim, quero excluir!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#Modaledit').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Tem certeza que deseja excluir a tarefa de código ' + recipient + ' ?')
        modal.find('.modal-body textarea').val(recipient)
    })
</script>
</script> <!-- End Modal Delete -->