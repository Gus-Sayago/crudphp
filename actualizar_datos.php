<?php
$conn = new mysqli("localhost","root","","miempresa");

//recibimos los datos del form
$ape_nom = $_POST['apellido_nombre'];
$puesto = $_POST['puesto'];
$fecha_ingreso = $_POST['fecha_ing'];
$legajo = $_POST['legajo'];

//consulta para hacer update
$actualizar = "UPDATE empleados SET apellido_nombre = '$ape_nom',puesto = '$puesto',fecha_ingreso = '$fecha_ingreso' WHERE legajo = '$legajo'";

//ejecutamos consulta

$query = mysqli_query($conn, $actualizar);

if($query){
    echo("Se han actualizado correctamente los datos....");
}
?>