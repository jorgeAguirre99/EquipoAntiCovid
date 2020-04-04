<?php

include('connect.php');
$today = date("Y-m-d");
$sql = "SELECT `COL 1` AS D FROM `total_cases` WHERE `COL 1` != 'date' ORDER BY `COL 1` desc LIMIT 2";
$result = $conexion->query($sql);
$row = $result->fetch_object();
if($today != $row->D){
  $url = 'https://covid.ourworldindata.org/data/ecdc/total_cases.csv';
  $source = file_get_contents($url);
  file_put_contents('media/inc/total_cases.csv', $source);
  $url2 = 'https://covid19.isciii.es/resources/serie_historica_acumulados.csv';
  $source2 = file_get_contents($url2);
  file_put_contents('media/inc/serie_historica_acumulados.csv', $source2);


  $sql2 = "TRUNCATE `covid`;";
  $sql5 = "LOAD DATA INFILE 'E:/Web Design/Web Equipo Anti-Covid/EquipoAntiCovid/media/inc/serie_historica_acumulados.csv' 
  INTO TABLE `covid`
  FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
  LINES TERMINATED BY '\n';";

  $result = $conexion->query($sql2);
  $result = $conexion->query($sql5);


  $sql3 = "TRUNCATE `total_cases`;";
  $sql4 = "LOAD DATA INFILE 'E:/Web Design/Web Equipo Anti-Covid/EquipoAntiCovid/media/inc/total_cases.csv' 
  INTO TABLE `total_cases`
  FIELDS TERMINATED BY ',' ENCLOSED BY '\"'
  LINES TERMINATED BY '\n';";

  $result = $conexion->query($sql3);
  $result = $conexion->query($sql4);
}

?>