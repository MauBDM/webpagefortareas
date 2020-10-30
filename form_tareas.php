<form action="insertar.php" method="post">
    <div class="form-group">
        <label for="">Título Tarea: </label>    
        <input type="text" name="tarea" class="form-control"  autofocus required>
    </div>

    <div class="form-group">
    <label for="">Descripción: </label>
    <textarea class="form-control" name="descripcion"  rows="2" required></textarea>
    </div>

    <div class="form-group">
        <label for="" class="">Fecha Entrega: </label>    
        <input type="date" name="fecha" class="form-control" required>
    </div>
  
    <input type="submit" name="registrar" class="btn btn-success btn-block" style="background-color: #BE3CC8;" value="Guardar">
</form>