<?php 

include('connect.php');
$consulta = $_POST['consulta'];
$result = $conexion->query($consulta);

$row =  $result->fetch_object();
$cantidad = count($row); 
$i = 0;
for($i = 0;$i< $cantidad;$i++){
    $resultados += 'valor'.$i.'='.$row[$i];
   
}
echo $resultados;

//header("Location:consultasmysql.php?$resultados");
?>s