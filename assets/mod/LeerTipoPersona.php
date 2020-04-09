<?php
    include("connect.php");
    $sql = "select tipoPersona, id_tipoPersona from tipoPersona order by tipoPersona asc";
    $result = $conexion->query($sql);
    if($result->num_rows > 0){
		while ($row = mysqli_fetch_array($result)) {
            echo '<option value="'.$row[id_tipoPersona].'">'.$row[tipoPersona].'</option>';
         }
		mysqli_free_result ($result);
		mysqli_close ($conexion);
        /*while($row = $result->fetch_object()){
			
			echo '<option value="'.$row->id_tipoPersona.'">'.$row->tipoPersona.'</option>';
		}*/
    } else {
        echo 'No hay tipo de solicitante';
    }
?>