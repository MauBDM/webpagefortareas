<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>

<div class="container p-3">
        <div class="row">

            <div class="col-md-4">
                <div class="card card-body">
                <?php include("form_tareas.php"); ?>
                </div>
            </div>

            <div class="col-md-8">
            <div class="card card-body">
                        <!--FORMULARIO MOSTRAR ALUMNOS--><?php include("mostrar_tareas.php"); ?>
                    </div>     
            </div>
        </div>
</div>
<?php include("includes/footer.php"); ?>
