<?php

include('connect.php');
$today = date("Y-m-d");
$date0 = date("m/d/Y");
$sql = "SELECT `COL 1` AS HOY FROM `total_cases` WHERE `COL 1` != 'date' ORDER BY `COL 1` desc LIMIT 2";
$result = $conexion->query($sql);
$row = $result->fetch_object();
$date1 = strtotime($date0."-1 days");
$date1 = date("d/m/Y",$date1);
$sql4 = "SELECT SUM(`COL 3`) AS C FROM `covid` where `COL 2` = '$date1'";
$result5 = $conexion->query($sql4);
$row5 = $result5->fetch_object();
$sw = false;
if($today != $row->HOY || $row5->C == NULL){
  $sw = true;
  $url = 'https://covid.ourworldindata.org/data/ecdc/total_cases.csv';
  $source = file_get_contents($url);
  file_put_contents('media/inc/total_cases.csv', $source);
  $url2 = 'https://covid19.isciii.es/resources/serie_historica_acumulados.csv';
  $source2 = file_get_contents($url2);
  file_put_contents('media/inc/serie_historica_acumulados.csv', $source2);
  //Lo recorremos
$fila = 0;
//Abrimos nuestro archivo
$archivo = fopen("media/inc/serie_historica_acumulados.csv", "r");
//Lo recorremos
while (($datos = fgetcsv($archivo, ",")) == true) 
{
  $num = count($datos);
  $fila++;
  for ($columna = 0; $columna < $num; $columna++) 
      {
         $ndatos[$fila][$columna] = $datos[$columna];
     }
}
$resultados = '';
//Cerramos el archivo
fclose($archivo);
for($i = 1; $i<$fila;$i++){
if($i == $fila-1) {
  $resultados = $resultados."('".$ndatos[$i][0]."','".$ndatos[$i][1]."','".$ndatos[$i][2]."','".$ndatos[$i][3]."','".$ndatos[$i][4]."','".$ndatos[$i][5]."','".$ndatos[$i][6]."')";
}else{
  $resultados = $resultados."('".$ndatos[$i][0]."','".$ndatos[$i][1]."','".$ndatos[$i][2]."','".$ndatos[$i][3]."','".$ndatos[$i][4]."','".$ndatos[$i][5]."','".$ndatos[$i][6]."'),";
}
}

  $borrarcovid = "TRUNCATE `covid`;";
  $espana = "INSERT INTO `covid` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`) VALUES $resultados;";

  $result = $conexion->query($borrarcovid);
  $result = $conexion->query($espana);



  
$fila = 0;
//Abrimos nuestro archivo
$archivo = fopen("media/inc/total_cases.csv", "r");
//Lo recorremos
while (($datos = fgetcsv($archivo, ",")) == true) 
{
  $num = count($datos);
  for ($columna = 0; $columna < 3; $columna++) 
      {
         $ndatos[$fila][$columna] = $datos[$columna];
     }
     $fila++;
}
$resultados = '';
//Cerramos el archivo
fclose($archivo);
for($i = 0; $i<$fila;$i++){
if($i == $fila-1) {
  $resultados = $resultados."('".$ndatos[$i][0]."','".$ndatos[$i][1]."')";
}else{
  $resultados = $resultados."('".$ndatos[$i][0]."','".$ndatos[$i][1]."'),";
}
}
  $borrarcasos = "TRUNCATE `total_cases`;";
  $mundo = "INSERT INTO `total_cases` (`COL 1`, `COL 2`) VALUES $resultados;";

  $result = $conexion->query($borrarcasos);
  $result = $conexion->query($mundo);
}

?>