<?php
    include("connect.php");

		
		$id_tipoPersona = $_POST["tipoPersona"];
		
			
		$unidades=$_POST["unidadesProducto"];
		$fecha_solicitacion=date(d)."/".date(m)."/".date(y);
		
		
	
	
	
		$nombrePersona = $_POST["nombrePersona"];
		$apellidos = $_POST["apellidos"];
		$telefono = $_POST["telef"];
		$extension = $_POST["ext"];
		$emailPersona = $_POST["emailPersona"];
		$direccionPersona = $_POST["direccionPersona"];
		$numeroPersona = $_POST["numeroPersona"];
		$pisoPersona = $_POST["pisoPersona"];		
		$codigo_postalPersona = $_POST["codigo_postalPersona"];
	
	$strMensaje="";
	/*Guardamos los datos correspondientes a la tabla entidad*/
	
	$insertEntidades = "INSERT INTO entidades (nombre, direccion, numero, piso, codigo_postal, telefono, email) VALUES (?,?,?,?,?,?,?)";
	
	switch ($id_tipoPersona) {
    case 1:
		//entidad
        $nombreEntidad = $_POST["nombreEntidad"];
		$telefonoEntidad = $_POST["telefonoEntidad"];
		$emailEntidad = $_POST["emailEntidad"];
		$direccionEntidad = $_POST["direccionEntidad"];
		$numeroEntidad = $_POST["numeroEntidad"];
		$pisoEntidad = $_POST["pisoEntidad"];
		$codigo_postalEntidad = $_POST["codigo_postalEntidad"];	
        break;
    case 2:
		//persona física
        $nombreEntidad="Null";
		$direccionEntidad="Null";
		$numeroEntidad=0;
		$pisoEntidad=0;
		$codigo_postalEntidad=0;
		$telefonoEntidad="Null";
		$emailEntidad="Null";
        break;
    
	}
	
	
	if ($stmt = mysqli_prepare($conexion, $insertEntidades)) {
    
		mysqli_stmt_bind_param($stmt, "ssiiiss", $nombreEntidad, $direccionEntidad, $numeroEntidad, $pisoEntidad, $codigo_postalEntidad, $telefonoEntidad, $emailEntidad);
		mysqli_stmt_execute($stmt);
		
		$strMensaje.="La inserción en entidad fue exitosa. Filas insertadas: ".mysqli_stmt_affected_rows($stmt).PHP_EOL;
		
	}else{
		$strMensaje.="La inserción en entidad fue errónea. Error: ".mysqli_stmt_error($stmt).PHP_EOL;

	}
	
	/*Obtengo el valor del último id insertado en la tabla especificada*/
	$SQLentidades = "SELECT MAX(id_entidades) AS id FROM entidades";
	$ejecutado =mysqli_query($conexion,$SQLentidades);	
	if($ejecutado){
		
		
		if ($row = mysqli_fetch_row($ejecutado)) {
			$id_entidad = trim($row[0]);
			
		}		
	}
		
		
		
    
	
	

	
	$insertPersona = "INSERT INTO persona (nombre, apellidos, telefono, email, direccion, numero, piso, codigo_postal, extension) VALUES (?,?,?,?,?,?,?,?,?)";

	if ($stmt = mysqli_prepare($conexion, $insertPersona)) {
    
		mysqli_stmt_bind_param($stmt, "sssssiiii", $nombrePersona, $apellidos, $telefono, $emailPersona, $direccionPersona, $numeroPersona, $pisoPersona, $codigo_postalPersona, $extension);
		mysqli_stmt_execute($stmt);
		
		$strMensaje.="La inserción en persona fue exitosa. Filas insertadas: ".mysqli_stmt_affected_rows($stmt).PHP_EOL;
		
	}else{
		$strMensaje.="La inserción en persona fue errónea. Error: ".mysqli_stmt_error($stmt).PHP_EOL;

	}
	
	
	/*Obtengo el valor del último id insertado en la tabla especificada*/
	$SQLpersona = "SELECT MAX(id_persona) AS id FROM persona";
	$ejecutado =mysqli_query($conexion,$SQLpersona);	
	if($ejecutado){
		
		
		if ($row = mysqli_fetch_row($ejecutado)) {
			$id_personas = trim($row[0]);
			
		}		
	}
		echo 'Entidad: '.$id_entidad;
		echo 'Persona: '.$id_personas;
		/*echo 'Proceso: '.$id_proceso;
		echo 'Producto: '.$id_producto;
		echo 'Accion: '.$id_accion;
		echo 'Tipo de Persona: '.$id_tipoPersona;
		echo 'Unidades: '.$unidades;
		echo 'Fecha Solicitación: '.$fecha_solicitacion;
		echo 'Fecha entrega: '.$fecha_entrega;*/
		
		echo 'nombre= '.$nombrePersona." ";		
		echo 'apellidos= '.$apellidos." ";
		echo 'telefono= '.$telefonoPersona." ";
		echo 'extension= '.$extension." ";
		echo 'email= '.$emailPersona." ";
		echo 'direccion= '.$direccionPersona." ";
		echo 'numero= '.$numeroPersona." ";
		echo 'piso= '.$pisoPersona." ";		
		echo 'C.P.= '.$codigo_postalPersona." ";
	
		$id_proceso=1;

				
		$id_accion = $_POST["tipoSolicitacion"];
		$id_producto = $_POST["producto"];
		echo $fecha_solicitacion;
	
	$insertSolicitacion = "INSERT INTO solicitacion (id_entidades, id_producto, id_proceso, id_accion, id_tipoPersona, id_persona, unidades, fecha_solicitacion, fecha_entrega) VALUES (?,?,?,?,?,?,?,?,?)";

	if ($stmt = mysqli_prepare($conexion, $insertSolicitacion)) {
    
		mysqli_stmt_bind_param($stmt, "iiiiiiiss", $id_entidad, $id_producto, $id_proceso, $id_accion, $id_tipoPersona, $id_personas, $unidades, $fecha_solicitacion, $fecha_entrega);
		mysqli_stmt_execute($stmt);
		
		$strMensaje.="La inserción en solicitacion fue exitosa. Filas insertadas: ".mysqli_stmt_affected_rows($stmt).PHP_EOL;
		
	}else{
		$strMensaje.="La inserción en solicitacion fue errónea. Error: ".mysqli_stmt_error($stmt).PHP_EOL;

	}


	/*
		*Una vez terminado todo, imprimimos lo que se recogió en la variable utilitaria
		*Esto tiene la ventaja de que te informará de lo que ocurrió en ambas consultas
	*/

	echo $strMensaje;
	//include("emailConfirmacion.php");
	include("emailSolicitacion.php");
    ?>


