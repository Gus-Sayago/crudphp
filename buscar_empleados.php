<?php
$conn = new mysqli("localhost","root","","miempresa");
$buscar = $_POST['buscar'];



//consulta para hacer la busqueda de empleados
$buscar = "SELECT empleados.legajo, empleados.apellido_nombre, empleados.fecha_ingreso,puestos.puesto as 'verPuesto',puestos.sueldo FROM empleados, puestos WHERE empleados.puesto = puestos.id AND empleados.apellido_nombre LIKE '%$buscar%'
AND empleados.puesto = puestos.id";

//ejecutamos la busqueda
$query = mysqli_query($conn,$buscar);

//foreach recorre todos los resultados obtenidos
foreach($query as $res){
    echo("<br>Legajo:". $res['legajo']);
    echo("<br>Apellido y Nombres:". $res['apellido_nombre']);
    echo("<br>Puesto: ".$res['verPuesto']);
    echo("<br>Sueldo: $ ". $res['sueldo']);
    echo("<br>Fecha de ingreso. ".$res['fecha_ingreso']);
    
    $leg = $res['legajo'];

    echo("<br><a href='modificar.php?id=".$leg."'>Modificar</a>");
    echo(" <a href='eliminar.php?id=".$leg."'>Eliminar</a>");
    echo("<hr>");

}
?>
