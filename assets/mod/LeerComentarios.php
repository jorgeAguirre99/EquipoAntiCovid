<?php
    include("connect.php");
    $sql = "select Nombre,Comentario,Fecha from Comentarios order by Fecha desc  LIMIT 3;";
    $result = $conexion->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_object()){
            echo '<div class="row"><div class="col-11 ml-3 slideanim"><h5>'.strtoupper($row->Nombre) . '</h5><p>&quot;'.$row->Comentario.'&quot;</p><p>'.$row->Fecha.'</p></div></div>';
        }
    } else {
        echo 'No hay comentarios';
    }
?>
