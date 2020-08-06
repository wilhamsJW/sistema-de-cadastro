<?php include_once '../Backend/Database/connection.php'; ?>
<?php include_once '../Backend/Database/read.php'; ?>
<?php include_once '../Backend/Database/update.php'; ?>
<style>
    #d1, #d2, #d3, #d4, #d5, #d6 {
        color: #91121d;
        font-weight: bold;
    }
</style>

<!-- Protect page -->
<?php
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}
?> <!-- End Protect -->
<body>
<div class="container">
    <div class="">

        <!-- Saudação ao usuário -->
        <?php
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
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header"  style="color: #91121d;">
                                <h2  style="font-weight: bold;"><i class="fas fa-book-reader"></i>&nbsp;Título:</h2>
                                <div style="text-align: right;color:bisque">
                                        <!--Button Create, Update and delete-->
                                        <a href="create_task.php" role="button" title="criar tarefa" class="btn btn-outline-light"><i class="fas fa-plus-circle"></i></a>
                                        <a href="edit.php?id=<?php echo $id ?>" role="button" title="editar" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                        <a href="banco_de_dados/delete.php?id=<?php echo $id ?>" title="excluir" data-toggle="modal" data-target="#Modaledit" data-whatever="<?php echo $id ?>" style="color:tomato"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
                                        <!-- end button -->
                                    </div>
                                <h5 class="card-text" style="color: white;"><?php echo $title ?></h5>
                            </div>
                            <div class="card-body">                   
                                <h5 class="card-title" id="d1" ><i class="fas fa-keyboard"></i>&nbsp;Descrição:</h5>
                                    <p class="card-text"><?php echo $description ?></p>
                                    <h5 id="d2"><i class="fas fa-calendar-minus" ></i>&nbsp; Data ínicio: <?php echo $start_date ?></h5>
                                    <p><?php echo $start_date ?></p>
                                    <h5 id="d3"><i class="fas fa-calendar-minus"></i>&nbsp; Data final: <?php echo $last_date ?></h5>
                                    <p><?php echo $last_date ?></p>
                                    <h5 id="d4"><i class="fas fa-user"></i>&nbsp; Usuário:</h5>
                                    <p><?php echo $user ?></p>
                                    <h5  id="d5"><i class="fas fa-tasks"></i></i>&nbsp; Status:</h5>
                                    <p><?php echo $stats ?></p>
                                    <h5 id="d6"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;Código:</h5>
                                    <p><?php echo $id ?></p>
                                    <div style="text-align: right;color:bisque">
                                        <!--Button Create, Update and delete-->
                                        <a href="create_task.php" role="button" title="criar tarefa" class="btn btn-outline-light"><i class="fas fa-plus-circle"></i></a>
                                        <a href="edit.php?id=<?php echo $id ?>" role="button" title="editar" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                        <a href="banco_de_dados/delete.php?id=<?php echo $id ?>" title="excluir" data-toggle="modal" data-target="#Modaledit" data-whatever="<?php echo $id ?>" style="color:tomato"><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
                                        <!-- end button -->
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div> <!-- end card tasks -->

        <?php } ?>
    </div>
</div>


<!-- Modal Delete -->
<div class="modal fade" id="Modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir?</h5>
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
</script> </body> <!-- End Modal Delete -->