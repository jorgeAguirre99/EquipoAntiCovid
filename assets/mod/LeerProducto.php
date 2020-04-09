<?php
    include("connect.php");
    $sql = "select nombre, id_producto from producto order by nombre asc";
    $result = $conexion->query($sql);
    if($result->num_rows > 0){
		while ($row = mysqli_fetch_array($result)) {
            echo '<option value="'.$row[id_producto].'">'.$row[nombre].'</option>';
        }
		mysqli_free_result ($result);
		mysqli_close ($conexion);
        /*while($row = $result->fetch_object()){
           
			echo '<option value="'.$row->id_producto.'">'.$row->nombre.'</option>';
		}*/
    } else {
        echo 'No hay tipo de solicitante';
    }
?>