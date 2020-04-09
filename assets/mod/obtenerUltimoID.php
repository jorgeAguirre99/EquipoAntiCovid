<?php
/*Obtengo el valor del último id insertado en la tabla especificada*/

	function ultimoId($conexion, $SQLentidades){
		$ejecutado =mysqli_query($conexion,$SQLentidades);
		if($ejecutado){	
			if ($row = mysqli_fetch_row($ejecutado)) {
				$id = trim($row[0]);
				
				return $id;
			}	
		}
	}

?>


