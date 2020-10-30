<?php
include "db.php";
$id ="";
$tarea = $_POST["tarea"];
$desc = $_POST['descripcion'];
$fecha = $_POST['fecha'];

$insertar = "INSERT INTO tareas VALUES ('$id','$tarea', '$desc', '$fecha')";
$query = mysqli_query($conn, $insertar);

if(!$query){
    die ("error al guardar");
}else{
    header("location: index.php");
}
?>