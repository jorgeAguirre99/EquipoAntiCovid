<?php
    include("connect.php");
    if(empty($_POST["nombre"]) || empty($_POST["comentario"])){
        
        header("Location:../../index2.php?fail");

    }else{
        $nombre = $_POST["nombre"];
        $comentario = $_POST["comentario"];
        $sql = "insert into Comentarios values('$nombre','$comentario',SYSDATE())";
        $result = $conexion->query($sql);
    }
    header("Location:../../index2.php?sended");
    ?>


