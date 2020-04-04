<?php
    include("connect.php");
    $nombre = $_POST["nombre"];
    $comentario = $_POST["comentario"];
    $sql = "insert into Comentarios values('$nombre','$comentario',SYSDATE())";
    $result = $conexion->query($sql);
    header("Location:../../index.php");
    ?>


