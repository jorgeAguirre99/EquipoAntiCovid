<?php
    include("connect.php");
    $sql = "select accion, id_accion from accion order by accion asc";
    $result = $conexion->query($sql);
	if($result->num_rows > 0){
		while ($row = mysqli_fetch_array($result)) {
            echo '<option value="'.$row[id_accion].'">'.$row[accion].'</option>';
		}
		mysqli_free_result ($result);
		mysqli_close ($conexion);
        /*while($row = $result->fetch_object()){
			
			echo '<option value="'.$row->id_tipoPersona.'">'.$row->tipoPersona.'</option>';
		}*/
    } else {
    /*if($result->num_rows > 0){
		
        while($row = $result->fetch_object()){
           
			echo '<option value="'.$row->id_accion.'">'.$row->accion.'</option>';
		}
    } else {*/
        echo 'No hay tipo de solicitante';
    }
?>