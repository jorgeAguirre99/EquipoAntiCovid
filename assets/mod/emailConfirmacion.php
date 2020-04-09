<?php
	include("connect.php");
	$nombrePersona = $_POST["nombrePersona"];
	$emailPersona = $_POST["emailPersona"];
	$id_accion = $_POST["tipoSolicitacion"];
	$sql =	"SELECT accion FROM accion WHERE id_accion=".$id_accion;
	$ejecutado =mysqli_query($conexion,$sql);	
	if($ejecutado){
		
		
		if ($row = mysqli_fetch_row($ejecutado)) {
			$accion = trim($row[0]);
			
		}		
	}
	
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
  $mail->From = "info@equipoanticovid.com";
  $mail->FromName = "equipoanticovid";

  //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar 
  //una cuenta gratuita, por tanto lo pongo a 30  
  $mail->Timeout=30;

  //Indicamos cual es la dirección de destino del correo
  $mail->AddAddress($emailPersona);
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
	//$mail­>MsgHTML($body);	
	$sustituir_nombre = "%usuario_nombre%";
	$por_nombre = trim(utf8_decode($nombrePersona));
	$body = str_replace($sustituir_nombre, $por_nombre, $body);
 
	
	$sustituir_tipoSolicitacion = "%usuario_tipoSolicitacion%";
	$por_tipoSolicitacion = trim(utf8_decode($accion));
	$body = str_replace($sustituir_tipoSolicitacion, $por_tipoSolicitacion, $body);
	
 
 



	//$sustituir_nombre = "%usuario_email%";
	//$por_nombre = trim(utf8_decode($_POST[tu_email]));
	//$body = str_replace($sustituir_nombre, $por_nombre, $body);
 
//$sustituir_asunto = "%usuario_asunto%";
//$por_asunto = trim(utf8_decode($_POST[el_asunto]));
//$body = str_replace($sustituir_asunto, $por_asunto, $body);
 
//$sustituir_mensaje = "%usuario_mensaje%";
//$por_mensaje = stripslashes(trim(utf8_decode($_POST[tu_mensaje])));
//$body = str_replace($sustituir_mensaje, $por_mensaje, $body);
 
// Aquí incluimos el cuerpo del mensaje ya modificado
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
?>
