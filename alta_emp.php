<?php

//conexion a bd
$conn = new mysqli("localhost","root","","miempresa"); 

// recibimos los datos del form html
$ape_nombre = $_POST['apellido_nombre'];
$puesto = $_POST['puesto'];
$fecha_ing = $_POST['fecha_ing'];

//consulta de alta

$alta = "INSERT INTO empleados(apellido_nombre,puesto,fecha_ingreso) VALUES('$ape_nombre', '$puesto','$fecha_ing')";

//ejecutar consulta
if($query = mysqli_query($conn,$alta)){
    echo("Se ha dado de alta correctamente.");
    
}else{
    echo("Error al dar de alta...");
}
echo("<br><a href='alta_empleados.html'>Dar de Alta otro empleado</a>");

?>