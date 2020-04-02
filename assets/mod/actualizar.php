 <?php

$url = 'https://covid.ourworldindata.org/data/ecdc/total_cases.csv';
$source = file_get_contents($url);
file_put_contents('media/inc/total_cases.csv', $source);
$url2 = 'https://covid.ourworldindata.org/data/ecdc/total_cases.csv';
$source2 = file_get_contents($url2);
file_put_contents('media/inc/total_cases.csv', $source2);
include('connect.php');

$f_pointer=fopen("../../media/inc/total_cases.csv","r"); // file pointer

while(! feof($f_pointer)){
$ar=fgetcsv($f_pointer);
echo print_r($ar); // print the array 
echo "<br>";
}

 $i=3;
 $borrar = "ALTER TABLE `total_cases`";
  WHILE ($i < 206){
    $borrar += " DROP 'COL ".$i."'";
  } 

  $result = $conexion->query($borrar);

?>

