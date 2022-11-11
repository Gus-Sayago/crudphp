<?php
$conn = new mysqli("localhost","root","","miempresa");
$id_empleado = $_GET['id'];

//consulta para eliminar empleado

$baja = "DELETE FROM empleados WHERE legajo = '$id_empleado'";

//ejecutar baja

$query = mysqli_query($conn, $baja);
if($query){
    echo("Se ha dado de baja correctamente.");
}



?>