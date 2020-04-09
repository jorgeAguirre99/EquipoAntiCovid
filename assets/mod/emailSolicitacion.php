<?php
	include("connect.php");
	$nombrePersona = $_POST["nombrePersona"];
	$emailPersona = $_POST["emailPersona"];
	$id_accion = $_POST["tipoSolicitacion"];
	
	
	/*Obtengo el valor del último id insertado en la tabla especificada*/
	$SQLSolicitacion = "SELECT MAX(id_solicitacion) AS id FROM solicitacion";
	$ejecutado =mysqli_query($conexion,$SQLSolicitacion);	
	if($ejecutado){
		
		
		if ($row = mysqli_fetch_row($ejecutado)) {
			$id_solicitacion = trim($row[0]);
			
		}		
	}
	
	$sql =	"SELECT solicitacion.fecha_solicitacion, entidades.nombre, persona.nombre, tipoPersona.tipoPersona, producto.nombre, proceso.proceso, accion.accion
				FROM accion
					INNER JOIN solicitacion ON accion.id_accion = solicitacion.id_accion
					INNER JOIN proceso ON solicitacion.id_proceso = proceso.id_proceso
					INNER JOIN producto ON solicitacion.id_producto = producto.id_producto
					INNER JOIN tipoPersona ON solicitacion.id_tipoPersona=tipoPersona.id_tipoPersona
					INNER JOIN persona ON solicitacion.id_persona = persona.id_persona
					INNER JOIN entidades ON solicitacion.id_entidades = entidades.id_entidades WHERE id_solicitacion=".$id_solicitacion;
	$ejecutado =mysqli_query($conexion,$sql);	
	if($ejecutado){
		
		
		if ($row = mysqli_fetch_row($ejecutado)) {
			$solicitar = trim($row[0]);
			
		}		
	}
	
	echo "Que es esto: ".$solicitar."------";
  // primero hay que incluir la clase phpmailer para poder instanciar
  //un objeto de la misma
	require("../phpmailer/class.phpmailer.php");
	/*require '../phpmailer/Exception.php';
	require '../phpmailer/PHPMailerAutoload.php';*/
	//require '../phpmailer/SMTP.php';

	
  //instanciamos un objeto de la clase phpmailer al que llamamos 
  //por ejemplo mail
  //$mail = new phpmailer();
require '../phpmailer/class.smtp.php';
//require '../PHPMailer-master/src/Exception.php';
$mail = new phpmailer();
  //Definimos las propiedades y llamamos a los métodos 
  //correspondientes del objeto mail


$emails = array("yourusermail", "confirmacion@equipoanticovid.com", "solicitacion@equipoanticovid.com");

for($i = 0; $i < count($emails); $i++) {
    $mail->AddAddress($emails[$i]);
	
    echo $emails[$i];
	
	//Con PluginDir le indicamos a la clase phpmailer donde se 
	//encuentra la clase smtp que como he comentado al principio de 
	//este ejemplo va a estar en el subdirectorio includes
	$mail->PluginDir = "phpmailer/";

	//Con la propiedad Mailer le indicamos que vamos a usar un 
	//servidor smtp
	$mail->Mailer = "smtp";

	//Asignamos a Host el nombre de nuestro servidor smtp
	$mail->Host = "smtp.ionos.es";

	//Le indicamos que el servidor smtp requiere autenticación
	$mail->SMTPAuth = true;

	//Le decimos cual es nuestro nombre de usuario y password
	$mail->Username = "confirmacion@equipoanticovid.com"; 
	$mail->Password = "1nf0_confIr_equ1p0@nt1covid_2020";

	//Indicamos cual es nuestra dirección de correo y el nombre que 
	//queremos que vea el usuario que lee nuestro correo
	$mail->From = "confirmacion@equipoanticovid.com";
	$mail->FromName = "equipoanticovid";

	//el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar 
	//una cuenta gratuita, por tanto lo pongo a 30  
	$mail->Timeout=30;

	//Indicamos cual es la dirección de destino del correo
	//$mail->AddAddress("confirmacion@equipoanticovid.com");
	
	if($emails[$i]=="confirmacion@equipoanticovid.com"){
		$body = file_get_contents("body.html");
 
		//Asignamos asunto y cuerpo del mensaje
		//El cuerpo del mensaje lo ponemos en formato html, haciendo 
		//que se vea en negrita
		$mail->Subject = "Prueba de phpmailer";
		//$mail->Body = "<b>Mensaje de prueba mandado con phpmailer en formato html</b>";
		//$body = file_get_contents('body.html?nombre=');
		//$body = preg_replace('/[]/i','',$body);
  
		//$mail->Body = include ("body_html.php");
		//Definimos AltBody por si el destinatario del correo no admite email con formato html 
		$mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";
		$mail->IsHTML(true); 
			
		$sustituir_nombre = "%usuario_nombre%";
		$por_nombre = trim(utf8_decode($nombrePersona));
		$body = str_replace($sustituir_nombre, $por_nombre, $body);
 
	
		$sustituir_tipoSolicitacion = "%usuario_tipoSolicitacion%";
		$por_tipoSolicitacion = trim(utf8_decode($accion));
		$body = str_replace($sustituir_tipoSolicitacion, $por_tipoSolicitacion, $body);
	}else{
		$body = file_get_contents("body_solicitacion.html");
		$mail->Subject = "Prueba de phpmailer";
  
  
		$mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";
		$mail->IsHTML(true); 
	
		$sustituir_nombre = "%nombre_entidad%";
		$por_nombre = trim(utf8_decode($solicitar[nombre]));
		$body = str_replace($sustituir_nombre, $por_nombre, $body);
 
	
		$sustituir_tipoSolicitacion = "%telefono_entidad%";
		$por_tipoSolicitacion = trim(utf8_decode($accion));
		$body = str_replace($sustituir_tipoSolicitacion, $por_tipoSolicitacion, $body);
	
		$sustituir_tipoSolicitacion = "%email_entidad%";
		$por_tipoSolicitacion = trim(utf8_decode($accion));
		$body = str_replace($sustituir_tipoSolicitacion, $por_tipoSolicitacion, $body);
 
		$sustituir_tipoSolicitacion = "%direccion_entidad%";
		$por_tipoSolicitacion = trim(utf8_decode($accion));
		$body = str_replace($sustituir_tipoSolicitacion, $por_tipoSolicitacion, $body);


	
	}
$mail->MsgHTML($body);
	
	
	
	
	//$mail->msgHTML(file_get_contents('body.html'), __DIR__);
  //se envia el mensaje, si no ha habido problemas 
  //la variable $exito tendra el valor true
  $exito = $mail->Send();

  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas como mucho 
  //para intentar enviar el mensaje, cada intento se hara 5 segundos despues 
  //del anterior, para ello se usa la funcion sleep	
  $intentos=1; 
  while ((!$exito) && ($intentos < 5)) {
	sleep(5);
     	//echo $mail->ErrorInfo;
     	$exito = $mail->Send();
     	$intentos=$intentos+1;	
	
   }
 
		
   if(!$exito)
   {
	echo "Problemas enviando correo electrónico a ".$valor;
	echo "<br/>".$mail->ErrorInfo;	
   }
   else
   {
	echo "Mensaje enviado correctamente";
   }
}
?>
