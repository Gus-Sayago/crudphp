<?php
$conn = new mysqli("localhost","root","","miempresa");

//recibimos el id por url
$id_empleado = $_GET['id'];

//buscamos el empleado con el legado recibido
$buscar = "SELECT * FROM empleados WHERE legajo = '$id_empleado'";

//ejecutamos la consulta
$query = mysqli_query($conn,$buscar);

//recorremos los resultados y cargamos el form
foreach($query as $res){



?>

<!-- creamos un form para mostrar los datos -->

<html>
    <body>
<form action="actualizar_datos.php" method="post">
        <label for="apellido_nombre">Apellido y Nombres:</label>
        <input type="text" name="apellido_nombre" value="<?php echo($res['apellido_nombre']);?>">
        
        <br>
        <label for="puesto">Puesto:</label>
        <select name="puesto">
            <option value="2">Administración</option>
            <option value="3">Ventas</option>
            <option value="4">Gerencia</option>
        </select>
        <br>
        <label for="fecha_ing">Fecha de Ingreso:</label>
        <input type="date" name="fecha_ing" value="<?php echo($res['fecha_ingreso']);?>>
        <br>
        <input type="hidden" name = 'legajo' value='<?php echo($id_empleado);?>'>
        <input type="submit" value="Actualizar">

    </form>

</body>
    </html>


<?php

}
?>