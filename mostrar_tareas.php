<h3 align="center">Tareas de la Semana</h3>
<br>
<table id="tareastabla" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th> 
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha de Entrega</th>
                </tr>
            </thead>
<?php $data = "SELECT * FROM tareas";
$resultado_tabla= mysqli_query($conn,$data);
while($row = mysqli_fetch_array($resultado_tabla)){ ?>
    <tr>
        <td><?php echo $row['idtareas']; ?></td>
        <td><?php echo $row['titulo']; ?></td>
        <td><?php echo $row['descripcion']; ?></td> 
        <td><?php echo $row['fecha_registro']; ?></td>
    </tr>    
<?php } ?>    