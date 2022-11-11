<?php
$conn = new mysqli("localhost","root","","miempresa");

//consulta para hacer la busqueda de empleados
$buscar = "SELECT * FROM empleados";

//ejecutamos la busqueda
$query = mysqli_query($conn,$buscar);

//foreach recorre todos los resultados obtenidos
foreach($query as $res){
    echo("<br>Legajo:". $res['legajo']);
    echo("<br>Apellido y Nombres:". $res['apellido_nombre']);
    echo("<br>Puesto: ".$res['puesto']);
    echo("<br>Fecha de ingreso. ".$res['fecha_ingreso']);
    echo("<hr>");

}
?>
