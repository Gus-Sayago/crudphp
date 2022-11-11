<?php
//conexion a bd
$conn = new mysqli("localhost","root","","miempresa"); 

// recibimos los datos del form html
$puesto = $_POST['puesto'];
$sueldo = $_POST['sueldo'];
//creamos la consulta de alta
$alta = "INSERT INTO puestos(puesto,sueldo) VALUES ('$puesto','$sueldo')";

//EJECUTAMOS LA CONSULTA
$query = mysqli_query($conn,$alta);

//verificamos si se dio de alta
if($query){
    echo("Se ha dado de alta:". $puesto);
    echo("<br><a href='crear_puestos.html'>Volver</a>");
}
?>